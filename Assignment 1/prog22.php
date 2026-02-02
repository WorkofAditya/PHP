<!--Write a program to find entered number is Armstrong or not-->

<form method="post" action="">
Enter first number: <input type="number"
name="num" required><br><br>
<input type="submit" name="submit" value="submit">
</form>


<?php
if (isset($_POST['submit']))
 {
    $num = $_POST['num'];
    $sum = 0;
    $temp = $num;
    $digits = strlen($num);

    while ($temp > 0) {
        $rem = $temp % 10;
        $sum += pow($rem, $digits);
        $temp = (int)($temp / 10);
    }

    if ($sum == $num)
     {
        echo "$num is an Armstrong Number";
    } else
     {
        echo "$num is NOT an Armstrong Number";
    }
}
?>