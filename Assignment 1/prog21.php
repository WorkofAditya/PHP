<!--Write a program to check whether the entered String is palindrome or not (wow=wow).-->

<form method="post" action="">
Enter first number: <input type="text"
name="text" required><br><br>
<input type="submit" name="submit" value="submit">
</form>


<?php
if (isset($_POST['submit'])) {
    $str = $_POST['text'];
    $rev = strrev($str);

    if ($str == $rev) {
        echo "$str is a Palindrome";
    } else {
        echo "$str is NOT a Palindrome";
    }
}

?>

