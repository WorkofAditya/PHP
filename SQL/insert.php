<html>
<form action="" method="POST">
course <input type="text" name="course" ><br></br>
sem <input type="number" name="sem" ><br></br>
Subject <input type="text" name="sname" ><br></br>
<input type="submit" name="submit">
</form>
</html>
<?php
include 'db.php';
if(isset($_POST['submit']))
{
	$course = $_POST['course'];
	$sem = $_POST['sem'];
	$subject = $_POST['sname'];
	
	mysqli_query($conn,"insert into hjdtbl (course,sem,subject) values('$course',$sem,'$subject')");
	header("location:view.php");
}
?>