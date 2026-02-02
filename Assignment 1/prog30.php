<!--Write a program to merge two array and convert it into string -->
    <form method="post" action="">

        Frist string:<input type="text" name="array1"><br><br>

        second string:<input type="text" name="array2"><br><br>

        <input type="submit" name="submit" value="Merge">
    </form>

<?php
if (isset($_POST['submit'])) {

    // Convert input strings into arrays
    $array1 = explode(",", $_POST['array1']);
    $array2 = explode(",", $_POST['array2']);

    // Merge arrays
    $mergedArray = array_merge($array1, $array2);

    // Convert merged array to string
    $resultString = implode(" ", $mergedArray);

    echo "Merged Array as String: " . $resultString;
}
?>
