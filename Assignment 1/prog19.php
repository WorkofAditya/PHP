<!--Write a program to find factor of entered number.-->
<form method="post" action="">
number: <input type="number"
name="num" required><br><br>
<input type="submit" name="submit" value="submit">
</form>


<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];

    for ($i = 1; $i <= $num; $i++)
     {
        if ($num % $i == 0)
         {
            echo $i . " ";
        }
    }
}
?>
