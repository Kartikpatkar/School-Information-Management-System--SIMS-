<html>
<head><title>Student list</title>
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
$sql="SELECT * FROM student_detail";
$result=mysqli_query($connect,$sql);
?>
<body>
<center>
<table width="90%" border="1" cellspacing="0" bgcolor="#2E86C1" cellpadding="3">
<tr>
	<td colspan=8>
	<center>
	<font size=9.5>
	<b>Student</b>
	</font>
	</center>
	</td>
</tr>
<tr>
<td align="center"><strong>Roll No</strong></td>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>DOB</strong></td>
<td align="center"><strong>Email ID</strong></td>
<td align="center"><strong>Phone No</strong></td>
<td align="center"><strong>View Details</strong></td>
<td align="center"><strong>Update Details</strong></td>
<td align="center"><strong>Delete Student</strong></td>
</tr>
<?php
while($rows=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $rows['Roll_No']; ?></td>
<td><?php echo $rows['Name']; ?></td>
<td><?php echo $rows['DOB']; ?></td>
<td><?php echo $rows['Email_ID']; ?></td>
<td><?php echo $rows['Mobile_No']; ?></td>
<td align="center"><a href="student_view_ac.php?Name=<?php echo $rows['Name']; ?>"><button>view</button></a></td>
<td align="center"><a href="student_update_ac.php?Name=<?php echo $rows['Name']; ?>"><button>Update</button></a></td>
<td align="center"><a href="student_delete_ac.php?Roll_No=<?php echo $rows['Roll_No']; ?>"><button>delete</button></a></td>
</tr>
<?php
}
?>
</table>
<br>
<a href="Admin_page.html"><input type="submit" value="BACK"></a>
</center>
</body>
</html>