<!--Find leap year using PHP argument UDF and fmod().-->

<form method="post" action="">
Enter first number: <input type="number"
name="year" required><br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
function checkLeapYear($year)
{
    if ((fmod($year, 400) == 0) || (fmod($year, 4) == 0 && fmod($year, 100) != 0)) {
        return true;
    } else {
        return false;
    }
}

if (isset($_POST['submit'])) {
    $year = $_POST['year'];

    if (checkLeapYear($year)) {
        echo "$year is a Leap Year";
    } else {
        echo "$year is NOT a Leap Year";
    }
}
?>
