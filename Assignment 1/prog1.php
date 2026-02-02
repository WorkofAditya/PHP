<!--1.Write a program to print your name and surname using textbox.-->

<?php
{
$name = $_POST['name'];
$sname = $_POST['sname'];
echo"name is".$name."<br>";
echo"surname is".$sname."<br>";
}
?>

<form method="post" action="">
name: <input type="text"
name="name" required><br><br>
surname: <input type="text"
name="sname" required><br><br>
<input type="submit" name="submit" value="submit">
</form>