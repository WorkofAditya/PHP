<!--Write a program which accept user input and if entered string is in lowercase than convert it into upper or
 if it in upper than convert it into lower-->

<?php
if (isset($_POST['submit'])) {
$str = $_POST['str1'];
if($str===strtolower($str))
{
          echo strtoupper($str);
}
else if($str===strtoupper($str))
{
    echo strtolower($str);
}
else
{
          echo "string is not converted";
}
}
?>

<form method="post" action="">
Enter world: <input type="text" name="str1" required><br><br>
<input type="submit" name="submit" value="submit">
</form>