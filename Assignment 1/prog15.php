<!--Write a program that prints the sum of even numbers and odd numbers from n numbers
(ex. If user enter 10 then sum of  even and odd number between 1 to 10)-->
<!DOCTYPE html>
<html>
<head>
    <title>Sum of Even and Odd Numbers</title>
</head>
<body>

<h2>Sum of Even and Odd Numbers from 1 to N</h2>

<form method="post">
    Enter a number:
    <input type="number" name="num" required>
    <br><br>
    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_POST['submit'])) {

    $num = $_POST['num'];
    $evenSum = 0;
    $oddSum = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($i % 2 == 0) {
            $evenSum += $i;
        } else {
            $oddSum += $i;
        }
    }

    echo "<h3>Result</h3>";
    echo "Sum of Even Numbers (1 to $num): <strong>$evenSum</strong><br>";
    echo "Sum of Odd Numbers (1 to $num): <strong>$oddSum</strong>";
}
?>

</body>
</html>
