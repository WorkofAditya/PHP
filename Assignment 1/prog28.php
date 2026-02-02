<!--Write a program to find number of vowels from given string-->
<form method="post">
    in put your string:<input type="text" name="text" required> <br><br>
    <button type="submit" name="submit">Count Vowels</button>
</form>

<?php
if (isset($_POST['submit'])) {

    $string = $_POST['text'];
    $vowelCount = 0;

    // Convert string to lowercase
    $string = strtolower($string);

    // Loop through each character
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], ['a','e','i','o','u'])) {
            $vowelCount++;
        }
    }

    echo "<h3>Given String:</h3> " . htmlspecialchars($_POST['text']);
    echo "<h3>Number of Vowels:</h3> " . $vowelCount;
}
?>
