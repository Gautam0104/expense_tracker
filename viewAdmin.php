<?php
include "session.php";
if($email){
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | DETAIL</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/form.css">

</head>

<body>
    <?php
    include "helper/database.php";
    include "helper/user_dao.php";
    $user_dao = new UserDao($dbconn);
    $users = $user_dao->get_emp();
    $result = $user_dao->get_users();
    print_r($result["firstName"]);
    ?>
    <!-- navbar -->
    <?php include "navbar.php" ?>

    <!--Main layout-->
    <main style="margin-top: 20px;">

        <?php foreach ($result as $key => $value) {

        } ?>
        <div class="container">
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
        </div>

        <div class="card m-4 ">
            <h5 class="text-center m-4">ADMIN DETAIL</h5>
            <table class="table m-0 " id="sortTable">
                <thead>
                    <tr>
                        <th onclick="w3.sortHTML('#sortTable', '.item', 'td:nth-child(1)')" style="cursor:pointer">First
                            Name</th>
                        <th>Last Name</th>
                        <th>Email Adress</th>

                        <th>Action</th>

                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php
                    foreach ($result as $key => $value) {
                        ?>
                        <tr class="item">
                            <td><?= $value['firstName'] ?></td>
                            <td><?= $value['lastName'] ?></td>
                            <td><?= $value['email'] ?></td>
                            

                            <td><a href="editAdmin.php?id=<?= $value['id'] ?>&
                             name=<?= $value['firstName'] ?>&
                             lastname=<?= $value['lastName'] ?>&
                             emailAd=<?= $value['email'] ?>&
                             pass=<?= $value['password'] ?>&
                             role=<?= $value['admin_id'] ?>
                           
                            ">
                                   <span><i class="fas  fa-edit fa-fw me-3"></i></span>
                                </a>
                                <a href="deleteAdmin.php?id=<?= $value['id'] ?>">
                                    <span class="danger"><i class="fas  fa-trash fa-fw me-3" style="color:red;"></i></span>
                                </a>
                            </td>


                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <!--Main layout-->

    <!-- filter data js -->
    <script src="js/filter.js"></script>
    <!-- sort data js -->
    <script src="js/sortData.js"></script>
</body>

</html>
<?php

}else{
    header("Location: index.php");
}
?>