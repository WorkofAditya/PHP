<!--Write a program to print the day name according to the entered number. (using switch case)-->
<?php
if (isset($_POST['submit'])) {
$day = $_POST['str1'];
switch($day)
{
case 1:
          echo"monday";
          break;
case 2:
          echo"tuesday";
          break;
case 3:
          echo"wednesday";
          break;
case 4:
          echo"thursday";
          break;
case 5:
          echo"friday";
          break;
case 6:
          echo"saturday";
          break;
case 7:
          echo"sunday";
          break;
default:
          echo"invalid day";
          break;        
}
}
?>

<form method="post" action="">
Enter world: <input type="number" name="str1" required><br><br>
<input type="submit" name="submit" value="submit">
</form>