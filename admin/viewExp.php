<?php
include "../session.php";
if($email){
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYEE|EXPENSES</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/form.css">

</head>

<body>
    <?php
    include "../helper/database.php";
    include "../helper/user_dao.php";
    $user_dao = new UserDao($dbconn);
    $expenses = $user_dao->get_exp();
    // print_r($users);
    ?>
    <!-- navbar -->
    <?php include "navbar.php" ?>

    <!--Main layout-->
    <main style="margin-top: 20px;">

        <div class="container">
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
        </div>
        <div class="container">

        </div>
        <div class="card m-4 shadow">
            <h5 class="text-center m-4">EMPLOYEE EXPENSES DETAIL</h5>
            <table class="table m-0 " id="sortTable">
                <thead>
                    <tr>
                        <th onclick="w3.sortHTML('#sortTable', '.item', 'td:nth-child(1)')" style="cursor:pointer">
                            Employee Name</th>
                        <th onclick="w3.sortHTML('#sortTable', '.item', 'td:nth-child(2)')" style="cursor:pointer">
                            Expense Date</th>
                        <th>Expense Time</th>
                        <th>Expense Amount</th>
                        <th>Expense Reason</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php
                    if (isset($_SESSION['email'])) {
                        $email = $_SESSION['email'];
                        $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                        while ($row = mysqli_fetch_array($query)) {
                            foreach ($expenses as $key => $value) {
                                if ($value['emp_name'] == $row['firstName'] . ' ' . $row['lastName']) {

                                    ?>
                                    <tr class="item">
                                        <td><?= $value['emp_name'] ?></td>
                                        <td><?= $value['exp_d'] ?></td>
                                        <td><?= $value['exp_t'] ?></td>
                                        <td><?= $value['amount'] ?></td>
                                        <td><?= $value['reason'] ?></td>
                                        <td>
                                        <a href="editExp.php?
                                id=<?= $value['id'] ?>&
                                emp=<?= $value['emp_name'] ?>&
                                date=<?= $value['exp_d'] ?>&
                                time=<?= $value['exp_t'] ?>&
                                amount=<?= $value['amount'] ?>&
                                reason=<?= $value['reason'] ?>
                                ">
                                            <span><i class="fas fa-edit fa-fw me-3"></i></span>
                                        </a>
                                            <a href="deleteExp.php?id=<?= $value['id'] ?>">
                                                <span class="danger"><i class="fas  fa-trash fa-fw me-3" style="color:red;"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php

                                }
                            }

                        }
                    }
                    ?>
                    </p>
                    </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </main>
    <!--Main layout-->

    <!-- filter data js -->
    <script src="../js/filter.js"></script>
    <!-- sort data js -->
    <script src="../js/sortData.js"></script>

</body>

</html>
<?php

}else{
    header("Location: ../index.php");
}
?>