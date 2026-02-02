<!--Create array of 5 colors and print array movement function and also sort array--> 
<form method="post">
    <button type="submit" name="submit">Process Colors</button>
</form>
<?php
if (isset($_POST['submit'])) {

    $colors = array("Red", "Blue", "Green", "Yellow", "Orange");

    echo "<h3>Original Array:</h3>";
    print_r($colors);
    echo "<br><br>";


    function moveArray($arr) {
        $first = array_shift($arr); // remove first element
        array_push($arr, $first);   // add it to the end
        return $arr;
    }

    $movedArray = moveArray($colors);

    echo "<h3>Array After Movement:</h3>";
    print_r($movedArray);
    echo "<br><br>";

    // 3. Sort the array
    sort($colors);

    echo "<h3>Sorted Array:</h3>";
    print_r($colors);
}
?>
