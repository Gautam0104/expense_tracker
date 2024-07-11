<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD|ADMIN</title>
    <script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.12.1/dist/sweetalert2.all.min.js
    "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.12.1/dist/sweetalert2.min.css
    " rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
<?php

include 'helper/connect.php';


if (isset($_POST['submit'])) {
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $role = $_POST['role'];

    $checkEmail = "SELECT * From users where email='$email'";
    $result = $conn->query($checkEmail);
    if ($result->num_rows > 0) {
        ?>
        <script>
            Swal.fire({
                title: "Warning",
                text: "UserId Already Exists",
                icon: "warning"
            }); 
        </script>
        <?php
    } else {
        $insertQuery = "insert into users(admin_id,firstName,lastName,email,password)
                   values('$role','$firstName','$lastName','$email','$password')";
        if ($conn->query($insertQuery) == TRUE) {
            ?>
            <script>
                Swal.fire({
                    title:"Success",
                    text: "Successfully Registered",
                    icon: "success"
                })
            </script>

            <?php
           

        } else {
            echo "Error:" . $conn->error;
        }
    }


}
?>

    <!-- navbar -->
    <?php include "navbar.php" ?>
    <!--Main layout-->
    <main style="margin-top: 58px;">
        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">

                    <div class="card">
                        <h5 class="text-center mb-4">ADD NEW ADMIN</h5>
                        <form class="form-card" method="post">
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">First name<span class="text-danger">
                                            *</span></label> <input type="text" id="fname" name="fname"
                                        placeholder="Enter Emoloyee's first name" onblur="validate(1)"> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Last name<span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="lname" name="lname" placeholder="Enter Emoloyee's last name"
                                        onblur="validate(2)">
                                </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Email Address<span class="text-danger">
                                            *</span></label> <input type="text" id="email" name="username"
                                        placeholder="Enter Emoloyee's Email" onblur="validate(3)"> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Password<span class="text-danger">
                                            *</span></label> <input type="password" id="mob" name="password"
                                        placeholder="Enter Emoloyee's Mobile Number" onblur="validate(4)"> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-12 flex-column d-flex"> <label
                                        class="form-control-label px-3">Job title<span class="text-danger">
                                            *</span></label>
                                    <select type="text" id="job" name="role" placeholder="" onblur="validate(5)">
                                        <option selected disabled>Select a role</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Sub Admin</option>
                                        
                                    </select>
                                </div>
                                
                            <div class="row justify-content-center">
                                <div class="form-group col-sm-6"> <button type="submit" class="btn-block "
                                        style="background: rgb(125,125,235);" name="submit" >Save</button> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--/Main layout-->

    <!-- javascript -->
    <script src="js/formValidation1.js"></script>
    
   


</body>

</html>