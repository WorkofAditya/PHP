<?php
if (isset($_POST['submit'])) {
$num1 = $_POST['num1'];

{
          if($num1%2==0)
          {
                    echo"the entered number is even";
          }
          else
          {
                 echo"the entered number is odd";
          }
}

}
?>

<form method="post" action="">
Enter first number: <input type="number"
name="num1" required><br><br>
<input type="submit" name="submit" value="submit">
</form>