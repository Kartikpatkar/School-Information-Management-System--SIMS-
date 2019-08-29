<html>
<head>
</head>
<body style="background-color:gray;">
<?php
include 'database.php';
$sql="SELECT * FROM student_detail";
$result=mysqli_query($connect,$sql);

$id=$_GET['Name'];

$sql="SELECT * FROM student_detail";
$result=mysqli_query($connect,$sql);
$rows=mysqli_fetch_array($result)
?>
<form action="update_student.php?Name=<?php echo $id; ?>" method="post" name="Update">
	<center>
	<table cellpadding="5" width="50%" bgcolor="orange" align="left-side"	cellspacing="4">
		<tr>
			<td colspan="3" align="Center"><font size=9.5>Update</font></td>
		</tr>
		<tr>
			<td>Roll No.:</td>
			<td align="center"><input type="text" name="rollno" id="rollno" size="30"></td>
		</tr>
		<tr>
			<td>Attendance:</td>
			<td align="center"><input type="text" name="attendance" id="attendance" size="30"></td>
		</tr>
		<tr>
			<td colspan="3">Marks:</td>
		</tr>
		<tr>
			<td></td>
			<td align="center"><strong><font size="5">Sessional</font></strong></td>
			<td align="center"><strong><font size="5">Theory</font></strong></td>
		</tr>
		<tr>
			<td>English:</td>
			<td align="center"><input type="text" name="eng_IT" size="5" placeholder="25"></td>
			<td align="center"><input type="text" name="english" size="5" placeholder="100"></td>
			
		</tr>
		<tr>
			<td>Hindi:</td>
			<td align="center"><input type="text" name="hin_IT" size="5" placeholder="25"></td>
			<td align="center"><input type="text" name="hindi" size="5" placeholder="100"></td>
		</tr>
		<tr>
			<td>Mathematics:</td>
			<td align="center"><input type="text" name="mat_IT" size="5" placeholder="25"></td>
			<td align="center"><input type="text" name="maths" size="5" placeholder="100"></td>
		</tr>
		<tr>
			<td>Science:</td>
			<td align="center"><input type="text" name="sci_IT" size="5" placeholder="25"></td>
			<td align="center"><input type="text" name="science" size="5" placeholder="100"></td>
		</tr>
		<tr>
			<td>Social Science:</td>
			<td align="center"><input type="text" name="ss_IT" size="5" placeholder="25"></td>
			<td align="center"><input type="text" name="ss" size="5" placeholder="100"></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><a href="update_student.php"><input type="submit" value="OK"></a>
	</table>
	</center>
</form>
<center><a href="student_list.php"><input type="submit" value="BACK"></a></center>
</body>
</html>