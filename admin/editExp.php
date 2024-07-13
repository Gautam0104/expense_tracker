<?php
$id = $_GET['id'];
$empE = $_GET['emp'];
$dateE = $_GET['date'];
$timeE = $_GET['time'];
$amountE = $_GET['amount'];
$reasonE = $_GET['reason'];
echo$dateE;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE EXPENSES</title>
    <script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.12.1/dist/sweetalert2.all.min.js
    "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.12.1/dist/sweetalert2.min.css
    " rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <?php

    include '../helper/connect.php';


    if (isset($_POST['submit'])) {
        $empName = $_POST['empName'];
        $expD = $_POST['expd'];
        $expT = $_POST['expt'];
        $amount = $_POST['amount'];
        $reason = $_POST['reason'];
        $updateQuery = "UPDATE expenses SET emp_name='$empName', exp_d='$expD', exp_t='$expT', amount='$amount', reason='$reason' WHERE id='$id'";
        if ($conn->query($updateQuery) == TRUE) {
            ?>
            <script>
                Swal.fire({
                    title: "Success",
                    text: "Successfully Registered",
                    icon: "success"
                }).then(function () {
                    window.location = 'viewExp.php'
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
                        <h5 class="text-center mb-4">UPDATE EXPENSES DETAIL</h5>
                        <form class="form-card" method="post">
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-12 flex-column d-flex"> <label
                                        class="form-control-label px-3">Select Employee<span class="text-danger">
                                            *</span></label> <input type="text" id="fname" name="empName"
                                            value="<?=$empE?>"
                                        >
                                     </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Pick a expense date<span class="text-danger">
                                            *</span></label> <input type="date" id="expd" name="expd" value="<?=$dateE?>"> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Pick  expense time<span class="text-danger">
                                            *</span></label> <input type="time" id="expt" name="expt"value="<?=$timeE?>"> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label
                                        class="form-control-label px-3">Amount<span class="text-danger">
                                            *</span></label>
                                    <input type="text" id="amount" name="amount" value="<?=$amountE?>">
                                </div>

                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex"> <label
                                        class="form-control-label px-3">Write your reason of expenses<span
                                            class="text-danger">
                                            *</span></label> <textarea type="text" id="reason" name="reason" >
                                            <?=$reasonE?>
                                            </textarea> </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="form-group col-sm-6"> <button type="submit" class="btn-block "
                                        style="background: rgb(125,125,235);" name="submit">UPDATE</button> </div>
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