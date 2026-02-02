<!--Find simple interest using PHP return value UDF-->

<form method="post" action="">
Principal: <input type="number" name="p" required><br><br>
    Rate of Interest: <input type="number" name="r" required><br><br>
    Time (in years): <input type="number" name="t" required><br><br>
    <input type="submit" name="submit" value="submit">
</form>
<?php
function simpleInterest($p, $r, $t)
{
    $si = ($p * $r * $t) / 100;
    return $si;
}

if (isset($_POST['submit'])) {
    $p = $_POST['p'];
    $r = $_POST['r'];
    $t = $_POST['t'];

    $result = simpleInterest($p, $r, $t);

    echo "Simple Interest = $result";
}
?>
