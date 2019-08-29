<?php
include 'database.php';

$sql="SELECT * FROM admin_detail";
$result=mysqli_query($connect,$sql);
?>
<table width="400" border="1" cellspacing="0" cellpadding="3">
<tr>
<td colspan="4"><strong>List data from mysql </strong> </td>
</tr>
<tr>
<td align="center"><strong>Username</strong></td>
<td align="center"><strong>Password</strong></td>
</tr>
<?php
while($rows=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $rows['username']; ?></td>
<td><?php echo $rows['password']; ?></td>
<?php
}
?>
</table>
<?php
mysqli_close();
?>