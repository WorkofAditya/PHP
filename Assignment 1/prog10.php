<!--Write a program to perform arithmetic operation using switch case. (+,-,*,/).-->

<?php
if (isset($_POST['submit'])) {
$op = $_POST['str1'];
$a=5;
$b=6;
switch($op)
{
case '+':
          echo"addition=".$a+$b;
          break;
case '-':
          echo"subtraction=".$a-$b;
          break;
case '*':
          echo"multiplication=".$a*$b;
          break;
case '/':
          echo"division=".$a/$b;
          break;
default:
          echo"invalid operator";
          break;        
}
}
?>

<form method="post" action="">
Enter day: <input type="text" name="str1" required><br><br>
<input type="submit" name="submit" value="submit">
</form>


