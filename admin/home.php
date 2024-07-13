<?php
include "../session.php";
if($email){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | HOME</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>

<?php include "navbar.php" ?>

<main style="margin-top: 58px;">
<div style="text-align:center; padding:15%;">
<p  style="font-size:50px; font-weight:bold;">
Hello 
<?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
        
       </p>
       </div>
       </main>

</body>
</html>  
<?php

}else{
    header("Location: ../index.php");
}
?>