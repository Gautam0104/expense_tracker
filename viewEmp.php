<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYEE | DETAIL</title>
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
    // print_r($users);
    ?>
     <!-- navbar -->
    <?php include "navbar.php" ?>

    <!--Main layout-->
    <main style="margin-top: 70px;">
   
    
      <div class="container">
      <input class="form-control" id="myInput" type="text" placeholder="Search..">
      </div>
  
        <div class="card m-4 ">
        <h5 class="text-center m-4">EMPLOYEE DETAIL</h5>
            <table class="table m-0 ">
                <thead >
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email Adress</th>
                        <th>Mobile Number</th>
                        <th>Job Title</th>
                        <th>Salary</th>
                        
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php
                    foreach ($users as $key => $value) {
                        ?>
                        <tr>
                            <td><?= $value['firstName'] ?></td>
                            <td><?= $value['lastName'] ?></td>
                            <td><?= $value['email'] ?></td>
                            <td><?= $value['mobile_number'] ?></td>
                            <td><?= $value['job_title'] ?></td>
                            <td><?= $value['salary'] ?></td>
                        
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
</body>

</html>