<!--6.Write a program to check whether the entered year is leap year or not.-->
<?php
if (isset($_POST['submit'])) {
$num1 = $_POST['num1'];

{
          if($num1%4==0)
          {
                    echo"the entered number is leap year";
          }
          else
          {
                 echo"the entered number is not leap year";
          }
}

}
?>

<form method="post" action="">
Enter first number: <input type="number"
name="num1" required><br><br>
<input type="submit" name="submit" value="submit">
</form>