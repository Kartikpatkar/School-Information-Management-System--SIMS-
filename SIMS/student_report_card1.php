<html>
<head>
<title></title>
</head>
<body>
<?php
include 'database.php';

$roll=$_GET['RollNo'];

$sql1="SELECT * FROM student_detail WHERE Roll_No='$roll'"; 
$sql2="SELECT * FROM student_marks WHERE Roll_No='$roll'";  
$result1=mysqli_query($connect,$sql1);
$rows1=mysqli_fetch_array($result1);
$result2=mysqli_query($connect,$sql2);
$rows2=mysqli_fetch_array($result2);
  
?>
<center>
<div style="width:800px; height:1000px; padding:20px; text-align:center; border: 10px solid #787878">
<div style="width:750px; height:950px; padding:20px; text-align:center; border: 5px solid #787878">
       <span>
         <div style="float: left;"><img src="logo.jpg" width="200" height="160"/></div>
       <small><font size=6.5>ALPINE</font></small>
	   <small>Pune-403602<br>REPORT FOR THE ACADEMIC YEAR<br>2017-2018<br><br></small>
</span>
<table align="right" border="2" width="73%" cellpadding="10%" cellspacing="0">
<tr>
	<td>STD</td>
	<td>DIV.</td>
	<td>ROLL NO.</td>
	<td>CANDIDATE'S FULL NAME</td>
	<td>BIRTH DATE</td>
	
</tr>
<tr>
	<td>V</td>
	<td><?php echo $rows1['Class']; ?></td>
	<td><?php echo $rows1['Roll_No']; ?></td>
	<td><?php echo $rows1['Name']; ?></td>
	<td><?php echo $rows1['DOB']; ?></td>
</tr>
</table>
<p><br><br></p>
<table align="center" border="2" width="100%" cellpadding="8%" cellspacing="0">
<tr>
	<td align="center">Paper/Subjecr</td>
	<td></td> 
	<td align="right">Max. Marks</td>
	<td align="right">Min. for Passing</td>
	<td align="right">Marks Obtained</td>
	<td align="right">Remarks</td>
</tr>
<?php
$th=$rows2['English'];
$IT=$rows2['eng_IT'];
$tot=$th+$IT;
if($tot>=50)
{
	$g='P';
}
else
{
	$g='F';
}
?>
<tr>
	<td rowspan="3">English</td>
	<td align="right">Theory</td>
	<td align="right">100</td>
	<td align="right">40</td>
	<td align="right"><?php echo $th ?></td>
	<td rowspan="3" align="center"><?php echo $g ?></td>
</tr>
<tr>
	<td align="right">Sessional</td>
	<td align="right">25</td>
	<td align="right"></td>
	<td align="right"><?php echo $IT ?></td>
</tr>
<tr>
	<td align="right">Total</td>
	<td align="right">125</td>
	<td align="right">50</td>
	<td align="right"><?php echo $tot ?></td>
</tr>
<?php
$th=$rows2['Hindi'];
$IT=$rows2['hin_IT'];
$tot=$th+$IT;
if($tot>=50)
{
	$g='P';
}
else
{
	$g='F';
}
?>
<tr>
	<td rowspan="3">Hindi</td>
	<td align="right">Theory</td>
	<td align="right">100</td>
	<td align="right">40</td>
	<td align="right"><?php echo $th ?></td>
	<td rowspan="3" align="center"><?php echo $g ?></td>
</tr>
<tr>
	<td align="right">Sessional</td>
	<td align="right">25</td>
	<td align="right"></td>
	<td align="right"><?php echo $IT ?></td>
</tr>
<tr>
	<td align="right">Total</td>
	<td align="right">125</td>
	<td align="right">50</td>
	<td align="right"><?php echo $tot ?></td>
</tr>
<?php
$th=$rows2['Mathematics'];
$IT=$rows2['maths_IT'];
$tot=$th+$IT;
if($tot>=50)
{
	$g='P';
}
else
{
	$g='F';
}
?>
<tr>
	<td rowspan="3">Mathematics</td>
	<td align="right">Theory</td>
	<td align="right">100</td>
	<td align="right">40</td>
	<td align="right"><?php echo $th ?></td>
	<td rowspan="3" align="center"><?php echo $g ?></td>
</tr>
<tr>
	<td align="right">Sessional</td>
	<td align="right">25</td>
	<td align="right"></td>
	<td align="right"><?php echo $IT ?></td>
</tr>
<tr>
	<td align="right">Total</td>
	<td align="right">125</td>
	<td align="right">50</td>
	<td align="right"><?php echo $tot ?></td>
</tr>
<?php
$th=$rows2['Science'];
$IT=$rows2['sci_IT'];
$tot=$th+$IT;
if($tot>=50)
{
	$g='P';
}
else
{
	$g='F';
}
?>
<tr>
	<td rowspan="3">Science</td>
	<td align="right">Theory</td>
	<td align="right">100</td>
	<td align="right">40</td>
	<td align="right"><?php echo $th ?></td>
	<td rowspan="3" align="center"><?php echo $g ?></td>
</tr>
<tr>
	<td align="right">Sessional</td>
	<td align="right">25</td>
	<td align="right"></td>
	<td align="right"><?php echo $IT ?></td>
</tr>
<tr>
	<td align="right">Total</td>
	<td align="right">125</td>
	<td align="right">50</td>
	<td align="right"><?php echo $tot ?></td>
</tr>
<?php
$th=$rows2['Social_Science'];
$IT=$rows2['ss_IT'];
$tot=$th+$IT;
if($tot>=50)
{
	$g='P';
}
else
{
	$g='F';
}
?>
<tr>
	<td rowspan="3">Social Science</td>
	<td align="right">Theory</td>
	<td align="right">100</td>
	<td align="right">40</td>
	<td align="right"><?php echo $th ?></td>
	<td rowspan="3" align="center"><?php echo $g ?></td>
</tr>
<tr>
	<td align="right">Sessional</td>
	<td align="right">25</td>
	<td align="right"></td>
	<td align="right"><?php echo $IT ?></td>
</tr>
<tr>
	<td align="right">Total</td>
	<td align="right">125</td>
	<td align="right">50</td>
	<td align="right"><?php echo $tot ?></td>
</tr>
<tr>
	<td></td>
	<td rowspan="2" align="right">Total Marks</td>
	<td align="right">625</td>
	<td align="right">250</td>
	<td align="right"><?php echo $rows2['Total_Marks']; ?></td>
	<td align="right"></td>
</tr>
</table>
<?php
$tot=$rows2['Total_Marks'];
if($tot>=250)
{
	$res='PASSES';
}
else
{
	$res='FAILS';
}
?>
<p align="right"><b><?php echo $res ?></b></p>

<p align="left">
DATE:<br><?php 
echo "".date("d/m/y")."<br>";
?> 
<br><br>

(A:Absent;E:Exemption;P:Passes;F:Fails)
</p>
</div>
</div><br>
<a href="Student Login.html"><button>Back</button></a>
</center>
</body>
</html>