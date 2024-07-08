<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</head>

<body>
    <?php
    include "helper/database.php";
    include "helper/user_dao.php";
    $user_dao = new UserDao($conn);
    $users = $user_dao->get_users();
    // print_r($users);
    

    ?>
    <?php include "navbar.php" ?>

    <!--Main layout-->
    <main style="margin-top: 60px;">
        <div class="card m-4 shadow">
            <table class="table m-0 ">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Job Title</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $key => $value) {
                        ?>
                        <tr>
                            <td><?= $value['firstName'] ?></td>
                            <td><?= $value['lastName'] ?></td>
                            <td><?= $value['email'] ?></td>
                            <td><?= $value['mobile'] ?></td>
                            <td><?= $value['job_title'] ?></td>
                            <td><?= $value['query'] ?></td>
                            <td><span class="me-2 success" style="color:green;">Approved</span>|<span class="ms-2 success"
                                    style="color:orange;">Pending</span></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <!--Main layout-->
</body>

</html>