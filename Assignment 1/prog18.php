<!--Write a program to create table of entered number(example:- 5 than whole table of 5)-->
<form method="post" action="">
number: <input type="number"
name="num" required><br><br>
<input type="submit" name="submit" value="submit">
</form>


<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];

    for ($i = 1; $i <= 10; $i++)
     {
        echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
    }
}
?>
