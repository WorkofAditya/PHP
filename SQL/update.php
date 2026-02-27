<?php
include 'db.php';
$hid = $_GET['hid'];
$result = mysqli_query($conn,"select * from hjdtbl where hid= $hid");
$row = mysqli_fetch_assoc($result);
if(isset($_POST['submit']))
{
	$course = $_POST['course'];
	$sem = $_POST['sem'];
	$subject = $_POST['sname'];
	mysqli_query($conn,"update hjdtbl set course='$course',sem=$sem,subject='$subject' where hid = $hid");
	header("location:view.php");
}
?>

<html>
<form action="" method="POST">
course <input type="text" name="course"value =<?php echo $row['course']; ?>><br></br>
sem <input type="number" name="sem" value =<?php echo $row['sem']; ?>><br></br>
Subject <input type="text" name="sname" value =<?php echo $row['subject']; ?>><br></br>
<input type="submit" name="submit" value="edit">
</form>
</html>