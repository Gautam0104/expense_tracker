<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.12.1/dist/sweetalert2.all.min.js
    "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.12.1/dist/sweetalert2.min.css
    " rel="stylesheet">
</head>
<style>
    .tryAgain {
        width: 100%;
        height: 700px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .tryAgain li,
    a {
        list-style: none;
        text-decoration: none;
    }
</style>

<body>



    <?php

    include 'connect.php';
    $showAlert = false;

    if (isset($_POST['signUp'])) {
        $firstName = $_POST['fName'];
        $lastName = $_POST['lName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);

        $checkEmail = "SELECT * From users where email='$email'";
        $result = $conn->query($checkEmail);
        if ($result->num_rows > 0) {
            ?>
            <script>
                Swal.fire({
                    title: "Warning",
                    text: "UserId Already Exists",
                    icon: "warning"
                }).then(function () {
                        window.location = "../index.php";
\                    });  
            </script>
            <?php
        } else {
            $insertQuery = "INSERT INTO users(firstName,lastName,email,password)
                       VALUES ('$firstName','$lastName','$email','$password')";
            if ($conn->query($insertQuery) == TRUE) {
                ?>
                <script>
                    Swal.fire({
                        title:"Success",
                        text: "Successfully Registered",
                        icon: "success"
                    }).then(function () {
                        window.location = "../index.php";
                    }) 
                </script>

                <?php
               
 
            } else {
                echo "Error:" . $conn->error;
            }
        }


    }

    if (isset($_POST['signIn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);

        $sql = "SELECT * FROM users WHERE email='$email' and password='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION['email'] = $row['email'];
            header("Location: ../homepage.php");
            exit();
        } else {
            ?>
            <script>
                Swal.fire({
                    title: "Error",
                    text: "Wrong Credential",
                    icon: "error",
                }).then(function () {
                    window.location = "../index.php";
                });
            </script>
            <div class="container tryAgain">
                <li>
                    <a href="../index.php">Try Again!</a>
                </li>
            </div>
            <?php
        }

    }
    ?>
     
</body>

</html>