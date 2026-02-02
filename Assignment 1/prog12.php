<?php


$p=$_POST["p"];
$r=$_POST["r"];
$n=$_POST["n"];
$si=($p*$r*$n)/100;
 echo"simple interest=".$si;

?>
<form method="post">
enter p:    <input type="number" name="p" required><br>
enter r:    <input type="number" name="r" required><br>
enter n:    <input type="number" name="n" required><br>
<input type="submit" name="submit" value="submit">
</form>

</body>
</html>