<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD|EXPENSES</title>
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
    include "helper/database.php";
    include "helper/user_dao.php";
    $user_dao = new UserDao($dbconn);
    $employees = $user_dao->get_emp();
    // print_r($employees);
    include ("helper/connect.php");
    if (isset($_POST["request"])) {
        $empName = $_POST['empName'];
        $expD = $_POST['expd'];
        $expT = $_POST['expt'];
        $amount = $_POST['amount'];
        $reason = $_POST['reason'];

        $insertQuery = "INSERT INTO expenses(emp_name,exp_d,exp_t,amount,reason)
                       VALUES ('$empName','$expD','$expT','$amount' ,'$reason')";
        if ($empName=="" || $expD=="" || $expT=="" || $amount=="" || $reason==""){
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
    <?php include "navbar.php"; ?>
    <!--Main layout-->
    <main style="margin-top: 58px;">
        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">

                    <div class="card">
                        <h5 class="text-center mb-4">ADD YOUR EXPENSES DETAIL</h5>
                        <form class="form-card" method="post">
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-12 flex-column d-flex"> <label
                                        class="form-control-label px-3">Select Employee<span class="text-danger">
                                            *</span></label> <select type="text" id="fname" name="empName"
                                        placeholder="Enter your first name" onblur="validate(1)">
                                        <option selected disabled>Open this select employee</option>
                                        <?php foreach ($employees as $key => $value) {
                                            ?>
                                            <option value="<?= $value['firstName'] . " " . $value['lastName']; ?>">
                                                <?= $value['firstName'] . " " . $value['lastName']; ?></option>
                                            <?php
                                        } ?>


                                    </select></div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Pick a expense date<span class="text-danger">
                                            *</span></label> <input type="date" id="expd" name="expd" placeholder=""
                                        onblur="validate(2)"> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Pick  expense time<span class="text-danger">
                                            *</span></label> <input type="time" id="expt" name="expt" placeholder=""
                                        onblur="validate(3)"> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Amount<span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="amount" name="amount" placeholder="Enter employee expense amount" onblur="validate(4)">
                                </div>

                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label
                                        class="form-control-label px-3">Write your reason of expenses<span
                                            class="text-danger">
                                            *</span></label> <textarea type="text" id="reason" name="reason" placeholder=""
                                        onblur="validate(5)"></textarea> </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="form-group col-sm-6"> <button type="submit" class="btn-block "
                                        style="background: rgb(125,125,235);" name="request">Save</button> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--/Main layout-->

    <!-- javascript -->
    <script src="js/formValidation2.js"></script>

</body>

</html>