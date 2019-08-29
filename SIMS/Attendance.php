<html>
<head><title>Attendance list</title>
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
$sql="SELECT * FROM attendance";
$result=mysqli_query($connect,$sql);
?>
<body>
<center>
<table width="90%" border="1" cellspacing="0" bgcolor="#2E86C1" cellpadding="3">
<tr>
	<td colspan=8>
	<center>
	<font size=9.5>
	<b>Attendance</b>
	</font>
	</center>
	</td>
</tr>
<tr>
<td align="center"><strong>Roll No</strong></td>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>attendance</strong></td>
</tr>
<?php
while($rows=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $rows['roll no.']; ?></td>
<td><?php echo $rows['name']; ?></td>
<td><?php echo $rows['attendance']; ?></td>
</tr>
<?php
}
?>
</table>
<br>
<a href="student_page.html"><input type="submit" value="BACK"></a>
</center>
</body>
</html>