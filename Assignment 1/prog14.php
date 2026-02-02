<!--Write a program to print sum inputted number (exm. If user input 5 then sum should be from 1 to5).-->
<!DOCTYPE html>
<html>
<head>
    <title>Sum of Numbers</title>
</head>
<body>

<h2>Sum of Numbers from 1 to N</h2>

<form method="post">
    Enter a number:
    <input type="number" name="num" required>
    <br><br>
    <input type="submit" name="submit" value="Calculate Sum">
</form>

<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    $sum = 0;

    for ($i = 1; $i <= $num; $i++) {
        $sum = $sum + $i;
    }

    echo "<h3>Result</h3>";
    echo "Sum of numbers from 1 to $num is: <strong>$sum</strong>";
}
?>

</body>
</html>

