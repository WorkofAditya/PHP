<!--Write a program to create  Fibonacci series of given number(example :- 5 than 0 1 1 2 3)-->

<form method="post" action="">
Enter first number: <input type="number"
name="num" required><br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
if (isset($_POST['submit']))
{
    $n = $_POST['num'];
    $a = 0;
    $b = 1;

    for ($i = 0; $i < $n; $i++)
    {
        echo $a . " ";
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
}
?>