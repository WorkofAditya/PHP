<!--Print following series upto n number(ex. 5 then 1 8 9 64 25)-->
<form method="post" action="">
number: <input type="number"
name="num" required><br><br>
<input type="submit" name="submit" value="submit">
</form>


<?php
if (isset($_POST['submit'])) {
    $n = $_POST['num'];

    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 1) {
            // odd position → square
            echo ($i * $i) . " ";
        } else {
            // even position → cube
            echo ($i * $i * $i) . " ";
        }
    }
}
?>

