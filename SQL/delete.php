<?php
include 'db.php';
$hid = $_GET['hid'];
mysqli_query($conn,"delete from hjdtbl where hid= $hid");
header("location:view.php");
?>