<!--Find all symbol and characters using using chr() and ord()-->
<form method="post">
    Enter a character:
    <input type="text" name="char" maxlength="1" required><br><br>

    Enter ASCII value:
    <input type="number" name="ascii" required><br><br>

    <input type="submit" name="submit" value="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $char = $_POST['char'];
    $ascii = $_POST['ascii'];

    echo "ASCII value of $char is:  . ord($char) ." ;
    echo "Character for ASCII value $ascii is: . chr($ascii) . ";
}
?>


