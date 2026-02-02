<?php
if (isset($_POST['submit'])) {
$num1 = $_POST['num1'];

{
          if($num1>0)
          {
                    echo"the entered number is positive";
          }
          else if($num1<0)
          {
                 echo"the entered number is negative";
          }
          else 
          {
                 echo"the entered number is zero";
          }
}

}
?>

<form method="post" action="">
Enter first number: <input type="number"
name="num1" required><br><br>
<input type="submit" name="submit" value="submit">
</form>