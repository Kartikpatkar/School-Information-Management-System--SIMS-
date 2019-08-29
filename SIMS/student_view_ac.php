<html>
<head>
<title>Student Details</title>
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

$name=$_GET['Name'];

$sql1="SELECT * FROM student_detail WHERE Name='$name'"; 
$sql2="SELECT * FROM student_marks WHERE Name='$name'";  
$sql3="SELECT * FROM attendance WHERE Name='$name'"; 
$result1=mysqli_query($connect,$sql1);
$rows1=mysqli_fetch_array($result1);
$result2=mysqli_query($connect,$sql2);
$rows2=mysqli_fetch_array($result2);
$Rollno=$rows1['Roll_No'];
$result3=mysqli_query($connect,$sql3);
$rows3=mysqli_fetch_array($result3);
$Rollno=$rows3['roll no.'];
  
?>
<center>
<table cellpadding="4" width="50%" bgcolor="#2E86C1" align="left-side" cellspacing="4" border="1">
<tr>
	<td colspan="5"><center><b><font size=9.5>Detail</font></b></center></td>
</tr>
<tr>
	<td><b>Name:</b></td>
	<td colspan="4"><?php echo $rows1['Name']; ?></td>
</tr>
<tr>
	<td><b>Roll No.:</b></td>
	<td colspan="4"><?php echo $rows1['Roll_No']; ?></td>
</tr>
<tr>
	<td><b>DOB:</b></td>
	<td colspan="4"><?php echo $rows1['DOB']; ?></td>
</tr>
<tr>
	<td><b>Father Name:</b></td>
	<td colspan="4"><?php echo $rows1['Father_Name']; ?></td>
</tr>
<tr>
	<td><b>Gender:</b></td>
	<td colspan="4"><?php echo $rows1['Gender']; ?></td>
</tr>
<tr>
	<td><b>Permanent Address:</b></td>
	<td colspan="4"><?php echo $rows1['Permanent_Address']; ?></td>
</tr>
<tr>
	<td><b>Current Address:<b></td>
	<td colspan="4"><?php echo $rows1['Current_Address']; ?></td>
</tr>
<tr>
	<td><b>State:</b></td>
	<td colspan="4"><?php echo $rows1['State']; ?></td>
</tr>
<tr>
	<td><b>Class:</b></td>
	<td colspan="4"><?php echo $rows1['Class']; ?></td>
</tr>
<tr>
	<td><b>District:</b></td>
	<td colspan="4"><?php echo $rows1['District']; ?></td>
</tr>
<tr>
	<td><b>PinCode:</b></td>
	<td colspan="4"><?php echo $rows1['PinCode']; ?></td>
</tr>
<tr>
	<td><b>Email ID:</b></td>
	<td colspan="4"><?php echo $rows1['Email_ID']; ?></td>
</tr>
<tr>
	<td><b>Mobile No.:</b></td>
	<td colspan="4"><?php echo $rows1['Current_Address']; ?></td>
</tr>
<tr>
	<td><b>Attendance:</b></td>
	<td colspan="4"><?php echo $rows3['attendance']; ?></td>
</tr>
<tr>
	<td colspan="5"><font size="5"><center><b>Marks</b></center></font></td>
</tr>
<tr>
	<td><b>SUBJECT</b></td>
	<td><center><b>SESSIONAL MARKS</b></center></td>
	<td><center><b>MAX. MARKS</b></center></td>
	<td><center><b>THEORY MARKS</b></center></td>
	<td><center><b>MAX. MARKS</b></center></td>
<tr>
	<td><b>English:</b></td>
	<td><center><?php echo $rows2['eng_IT']; ?></center></td>
	<td><center>25</center></td>
	<td><center><?php echo $rows2['English']; ?></center></td>
	<td><center>100</center></td>
</tr>
<tr>
	<td><b>Hindi:</b></td>
	<td><center><?php echo $rows2['hin_IT']; ?></center></td>
	<td><center>25</center></td>
	<td><center><?php echo $rows2['Hindi']; ?></center></td>
	<td><center>100</center></td>
</tr>
<tr>
	<td><b>Mathematics:</b></td>
	<td><center><?php echo $rows2['maths_IT']; ?></center></td>
	<td><center>25</center></td>
	<td><center><?php echo $rows2['Mathematics']; ?></center></td>
	<td><center>100</center></td>
</tr>
<tr>
	<td><b>Science:</b></td>
	<td><center><?php echo $rows2['sci_IT']; ?></center></td>
	<td><center>25</center></td>
	<td><center><?php echo $rows2['Science']; ?></center></td>
	<td><center>100</center></td>
</tr><tr>
	<td><b>Social Science:</b></td>
	<td><center><?php echo $rows2['ss_IT']; ?></center></td>
	<td><center>25</center></td>
	<td><center><?php echo $rows2['Social_Science']; ?></center></td>
	<td><center>100</center></td>
</tr>
<tr>
	<td></td>
	<td colspan="2" align="center"><center><b>Obtained Marks:</b></center></td>
	<td colspan="2" align="center"><center><b>Max. Marks:</b></center></td>
</tr>
<tr>
	<td><b>Total Marks:</b></td>
	<td colspan="2"><center><?php echo $rows2['Total_Marks']; ?></center></td>
	<td colspan="2"><center>625</center></td>
</tr>
<tr>
	<td><a href="student_list.php"><button>BACK</button></td>
	<td colspan="4" align="right"><a href="student_report_card2.php?RollNo=<?php echo $Rollno ?>"><button>Report Card</button></a></td>
</tr>
</table>
</center>
</body>
</html>
