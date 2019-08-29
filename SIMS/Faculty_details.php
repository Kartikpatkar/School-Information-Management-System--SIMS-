<html>
<head><title>Faculty Details</title>
<style>
body {
color: #FFFFFF ;
background-position:center;
background-size:100%;
background-image: url("student_list.jpg");
background-repeat: no-repeat;
}
</style>
</head>
<?php
include 'database.php';
$sql="SELECT * FROM faculty_details";
$result=mysqli_query($connect,$sql);
?>
<body>
<center>
<table width="90%" border="1" cellspacing="0" bgcolor="#2E86C1" cellpadding="3">
<tr>
	<td colspan=8>
	<center>
	<font size=9.5>
	<b>Faculty</b>
	</font>
	</center>
	</td>
</tr>
<tr>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>Phone No.</strong></td>
</tr>
<?php
while($rows=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $rows['name']; ?></td>
<td><?php echo $rows['phone_no']; ?></td>
</tr>
<?php
}
?>
</table>
<br>
<a href="homepage.php"><input type="submit" value="BACK"></a>
</center>
</body>
</html>