<!--Write a program to check whether user is eligible for voting(age>18)-->
<!DOCTYPE html>
<html>
<head>
    <title>Voting Eligibility</title>
</head>
<body>

<h2>Check Voting Eligibility</h2>

<form method="post">
    Enter your age:
    <input type="number" name="age" required>
    <br><br>
    <input type="submit" name="submit" value="Check">
</form>

<?php
if (isset($_POST['submit'])) {

    $age = $_POST['age'];

    if ($age >= 18) {
        echo "You are eligible to vote.";
    } else {
        echo "You are not eligible to vote.";
    }
}
?>

</body>
</html>
