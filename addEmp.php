<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD|EMPLOYEE</title>
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
    include ("helper/connect.php");
    if (isset($_POST["request"])) {
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $mobile = $_POST['mob'];
        $jobTitle = $_POST['job'];
        $salary = $_POST['salary'];
        $insertQuery = "INSERT INTO emp_detail(firstName,lastName,email,mobile_number,job_title,salary)
                       VALUES ('$firstName','$lastName','$email','$mobile' ,'$jobTitle' ,'$salary')";
           if($firstName=="" || $lastName=="" || $email=="" || $mobile=="" || $salary==""){
            ?>
    
            <script>
                Swal.fire({
                    title: "Warning",
                    text: "Some field are empty please fill it carefully.",
                    icon: "warning"
                }); 
            </script>

            <?php
           }else{
            if ($conn->query($insertQuery) == TRUE) {
           
                ?>
    
                <script>
                    Swal.fire({
                        title: "Success",
                        text: "Data Saved Successfully",
                        icon: "success"
                    }); 
                </script>
    
                <?php
    
            } else {
                echo "not working";
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
                        <h5 class="text-center mb-4">ADD NEW EMPLOYEE DETAIL</h5>
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
                                            *</span></label> <input type="text" id="email" name="email"
                                        placeholder="Enter Emoloyee's Email" onblur="validate(3)"> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Mobile number<span class="text-danger">
                                            *</span></label> <input type="text" id="mob" name="mob"
                                        placeholder="Enter Emoloyee's Mobile Number" onblur="validate(4)"> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Job title<span class="text-danger">
                                            *</span></label>
                                    <select type="text" id="job" name="job" placeholder="" onblur="validate(5)">
                                        <option selected disabled>Select a job title</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="Testing">Testing</option>
                                        <option value="Data Entry">Data Entry</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Salary<span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="salary" name="salary"
                                        placeholder="Enter Emoloyee's Salary monthly" onblur="validate(6)">
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="form-group col-sm-6"> <button type="submit" class="btn-block "
                                        style="background: rgb(125,125,235);" name="request" >Save</button> </div>
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