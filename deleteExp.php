<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE EXPENSES</title>
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
$id = $_GET['id'];
 include 'helper/connect.php';
$deletequery = "DELETE FROM expenses WHERE id='$id'";
if($conn->query($deletequery ) == TRUE) {
    ?>
    <script>
        Swal.fire({
            title: "Success",
            text: "Expenses Deleted Successfully",
            icon: "success"
        }).then(function () {
            window.location = 'viewExp.php'
        })
    </script>

    <?php


} else {
    echo "Error:" . $conn->error;
}

?>
</body>
</html>