<?php
$id = $_GET['id'];
$admin = $_GET['name'];
$adminlast = $_GET['lastname'];
$adminemail = $_GET['emailAd'];
$adminpass = $_GET['pass'];
$adminrole = $_GET['role'];

//  echo $id;
//  echo $admin;
//  echo $adminlast;
//  echo $adminemail;
//  echo $adminpass;
//  echo $adminrole;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE ADMIN</title>
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

        $updateQuery = "UPDATE users SET firstName='$firstName', lastName='$lastName', email='$email', password='$password',admin_id='$role' WHERE id='$id'";
        if ($conn->query($updateQuery) == TRUE) {
            ?>
            <script>
                Swal.fire({
                    title: "Success",
                    text: "Successfully Registered",
                    icon: "success"
                }).then(function () {
                    window.location = 'viewAdmin.php'
                })
            </script>

            <?php


        } else {
            ?>
            <script>
                Swal.fire({
                    title: "Error",
                    text: "Something went wrong",
                    icon: "error"
                })
            </script>
            <?php
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
                        <h5 class="text-center mb-4">UPDATE ADMIN</h5>
                        <form class="form-card" method="post">
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">First name<span class="text-danger">
                                            *</span></label> <input type="text" id="fname" name="fname"
                                        value="<?= $admin ?>"> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Last name<span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="lname" name="lname" value="<?= $adminlast ?>">
                                </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Email Address<span class="text-danger">
                                            *</span></label> <input type="text" id="email" name="username"
                                        value="<?= $adminemail ?>"> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Password<span class="text-danger">
                                            *</span></label> <input type="password" id="mob" name="password"
                                        placeholder="Enter New Password" onblur="validate(4)"> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-12 flex-column d-flex"> <label
                                        class="form-control-label px-3">Role<span class="text-danger">
                                            *</span></label>
                                    <select type="text" id="job" name="role" value="<?= $role ?>">
                                        <option selected disabled>Select New Role</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Sub Admin</option>

                                    </select>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="form-group col-sm-6"> <button type="submit" class="btn-block "
                                            style="background: rgb(125,125,235);" name="submit">Update</button> </div>
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