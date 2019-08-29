<html>
<head><title>Admin list</title>
</head>
<?php
include 'database.php';
$sql="SELECT * FROM admin_detail";
$result=mysqli_query($connect,$sql);
?>
<body>
<form>
<center>
<table width="400" border="1" cellspacing="0" cellpadding="3">
<tr>
<td  align="center" colspan="4"><strong>Admin List</strong> </td>
</tr>
<tr>
<td align="center"><strong>Admin ID</strong></td>
<td align="center"><strong>Username</strong></td>
<td></td>
</tr>
<?php
while($rows=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $rows['Admin_Id']; ?></td>
<td><?php echo $rows['Username']; ?></td>
<td align="center"><a href="admin_delete_ac.php?Admin_Id=<?php echo $rows['Admin_Id']; ?>">delete</a></td>
</tr>
<?php
}
?>
</table>
</center>
</form>
</body>
<?php
//mysqli_close();
?>
</html>