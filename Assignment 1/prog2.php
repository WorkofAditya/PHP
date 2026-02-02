<!-- 2.Write a program to swap value from one variable to another without using third variable(ex…$a = 10
 and $b = 20 then your answer is $a=20 and $b=10)-->

<?php
{
$a=$_POST['a'];
$b=$_POST['b'];
echo"a is".$b."<br>";
echo"b is".$a."<br>";
}
?>

<form method="post" action="">
a: <input type="number"
name="a" required><br><br>
b: <input type="number"
name="b" required><br><br>
<input type="submit" name="submit" value="submit">
</form>