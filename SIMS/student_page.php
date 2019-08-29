<html>
<head>
<title>Profile</title>
<style>
body {
color: black ;
background-position:center;
background-size:110%;
background-image: url("sl.jpg");
background-repeat: no-repeat;
}
</style>
</head>
<body>
<?php
include 'database.php';

$rollno=$_GET['Roll_No'];

$sql="SELECT * FROM student_detail WHERE Roll_No='$rollno'"; 
$result=mysqli_query($connect,$sql);
$rows=mysqli_fetch_array($result);
  
?>
<center>
<table cellpadding="4" width="50%" bgcolor="" align="left-side" cellspacing="4">
<tr>
	<td colspan="3"><center><b><font size=9.5>Detail</font></b></center></td>
</tr>
<tr>
	<td><b>Name:</b></td>
	<td colspan="2"><?php echo $rows['Name']; ?></td>
</tr>
<tr>
	<td><b>Roll No.:</b></td>
	<td colspan="2"><?php echo $rows['Roll_No']; ?></td>
</tr>
<tr>
	<td><b>DOB:</b></td>
	<td colspan="2"><?php echo $rows['DOB']; ?></td>
</tr>
<tr>
	<td><b>Father Name:</b></td>
	<td colspan="2"><?php echo $rows['Father_Name']; ?></td>
</tr>
<tr>
	<td><b>Gender:</b></td>
	<td colspan="2"><?php echo $rows['Gender']; ?></td>
</tr>
<tr>
	<td><b>Permanent Address:</b></td>
	<td colspan="2"><?php echo $rows['Permanent_Address']; ?></td>
</tr>
<tr>
	<td><b>Current Address:<b></td>
	<td colspan="2"><?php echo $rows['Current_Address']; ?></td>
</tr>
<tr>
	<td><b>State:</b></td>
	<td colspan="2"><?php echo $rows['State']; ?></td>
</tr>
<tr>
	<td><b>Class:</b></td>
	<td colspan="2"><?php echo $rows['Class']; ?></td>
</tr>
<tr>
	<td><b>District:</b></td>
	<td colspan="2"><?php echo $rows['District']; ?></td>
</tr>
<tr>
	<td><b>PinCode:</b></td>
	<td colspan="2"><?php echo $rows['PinCode']; ?></td>
</tr>
<tr>
	<td><b>Email ID:</b></td>
	<td colspan="2"><?php echo $rows['Email_ID']; ?></td>
</tr>
<tr>
	<td><b>Mobile No.:</b></td>
	<td colspan="2"><?php echo $rows['Current_Address']; ?></td>
</tr>
<tr>
	<td><a href="student_list.php"><button>BACK</button></td>
	<td><a href="student_report_card1.php?RollNo=<?php echo $rollno ?>"><button>REPORT CARD</button></td>
	<td><a href="Attendance.php"><button>Attendance</button></a>
	</tr>
</table>
</center>
</body>
</html>
