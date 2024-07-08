<?php
session_start();
include ("helper/connect.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">


  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fbfbfb;
    }

    @media (min-width: 991.98px) {
      main {
        padding-left: 240px;
      }
    }


    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      padding: 58px 0 0;
      box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
      width: 240px;
      z-index: 600;
      background-color: #c9d6ff;
    }
  </style>
</head>

<body>
  <!--Navbar-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span> dashboard</span>
          </a>
          <a href="homepage.php" class="list-group-item list-group-item-action py-2 ripple active">
            <i class="fas fa-home fa-fw me-3"></i><span>Home</span>
          </a>
          <a href="requestForm.php" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas  fa-book fa-fw me-3"></i><span>Request Form</span></a>
          <a href="showResposnse.php" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-table fa-fw me-3"></i><span>View Response</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-chart-pie fa-fw me-3"></i><span>Help</span>
          </a>

        </div>
      </div>
    </nav>
    <!-- Sidebar -->


    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">

      <div class="container-fluid">

        <button data-mdb-button-init class="navbar-toggler" type="button" data-mdb-collapse-init
          data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
          Expense Tracker

        </a>
        <ul class="navbar-nav ms-auto d-flex flex-row">

          <li class="nav-item ">
            <a class="nav-link ms-4 me-4 me-lg-3 active " href="#">Home</a>

          </li>
          <li class="nav-item ">
            <a class="nav-link ms-4 me-4  me-lg-3" href="#">About</a>

          </li>
          <li class="nav-item ">
            <a class="nav-link ms-4 me-4 me-lg-3" href="#">Services</a>

          </li>
          <li class="nav-item ">
            <a class="nav-link ms-4 me-4 me-lg-3" href="#">Contact</a>

          </li>
          <li class="nav-item ">
            <a class="nav-link btn btn-danger" href="helper/logout.php">Logout</a>

          </li>






        </ul>
      </div>

    </nav>

  </header>




  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


  <script src="js/sb-admin-2.min.js"></script>

  
  <script src="vendor/chart.js/Chart.min.js"></script>

 
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>