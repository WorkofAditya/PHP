<?php include 'db.php'; ?>
<html>
<body>
<a href="insert.php">Add new course</a>
<table border="1">
<tr><th>Hid</th>
<th>course</th>
<th>sem</th>
<th>subject</th></tr>
<?php
$result = mysqli_query($conn,"select *  from hjdtbl");
while($row = mysqli_fetch_assoc($result))
{
?>
<tr> <td><?php echo $row['hid'];?></td>
<td><?php echo $row['course'];?></td>
<td><?php echo $row['sem'];?></td>
<td><?php echo $row['subject'];?></td>
<td><a href="delete.php?hid=<?php echo $row['hid']; ?>">Delete</a>
<a href="update.php?hid=<?php echo $row['hid']; ?>">update</a></td></tr>
<?php } ?> 
</table>
</body>
</html>



