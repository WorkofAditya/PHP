<!--Write a program which accept user input  and find max number among entered 3 number-->

<?php
if (isset($_POST['submit'])) {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3=$_POST['num3'];
$max=$num1;
{
          if($num2>$max)
          {
                    $max=$num2;
          }
          if($num3>$max)
          {
                    $max=$num3;
          }
          echo"maximum number is".$max;
}

}
?>

<form method="post" action="">
Enter first number: <input type="number"
name="num1" required><br><br>
Enter second number: <input type="number"
name="num2" required><br><br>
Enter third number: <input type="number"
name="num3" required><br><br>
<input type="submit" name="submit" value="submit">
</form>