<!--Write a program to create student mark sheet of 2nd sem and check whether its pass or fail-->

<!DOCTYPE html>
<html>
<head>
    <title>2nd Sem Mark Sheet</title>
</head>
<body>

<h2>2nd Semester Student Mark Sheet</h2>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Roll No: <input type="text" name="roll" required><br><br>

    Subject 1: <input type="number" name="s1" required><br><br>
    Subject 2: <input type="number" name="s2" required><br><br>
    Subject 3: <input type="number" name="s3" required><br><br>
    Subject 4: <input type="number" name="s4" required><br><br>
    Subject 5: <input type="number" name="s5" required><br><br>

    <input type="submit" name="submit" value="Generate Mark Sheet">
</form>

<?php
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $roll = $_POST['roll'];

    $s1 = $_POST['s1'];
    $s2 = $_POST['s2'];
    $s3 = $_POST['s3'];
    $s4 = $_POST['s4'];
    $s5 = $_POST['s5'];

    $total = $s1 + $s2 + $s3 + $s4 + $s5;
    $percentage = $total / 5;

    if ($s1 >= 35 && $s2 >= 35 && $s3 >= 35 && $s4 >= 35 && $s5 >= 35) {
        $result = "PASS";
    } else {
        $result = "FAIL";
    }

    echo "<h3>Mark Sheet</h3>";
    echo "Name: $name <br>";
    echo "Roll No: $roll <br><br>";

    echo "Subject 1: $s1 <br>";
    echo "Subject 2: $s2 <br>";
    echo "Subject 3: $s3 <br>";
    echo "Subject 4: $s4 <br>";
    echo "Subject 5: $s5 <br><br>";

    echo "Total Marks: $total <br>";
    echo "Percentage: $percentage % <br>";
    echo "<strong>Result: $result</strong>";
}
?>

