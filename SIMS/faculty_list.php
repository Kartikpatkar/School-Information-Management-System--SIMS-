<html>
<head><title>Faculty list</title>
<style>
body {
color: #FFFFFF ;
background-position:center;
background-size:100%;
background-image: url("admin ka.jpg");
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
<table width="50%" border="1" cellspacing="0" bgcolor="#2E86C1" cellpadding="3">
<tr>
<td  align="center" colspan="7"><strong>Faculty List</strong> </td>
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
<td align="center"><?php echo $rows['name']; ?></td>
<td align="center"><?php echo $rows['phone_no']; ?></td>
<td align="center"><a href="facutly_delete_ac.php?name=<?php echo $rows['name']; ?>"><button>delete</button></a></td>
</tr>
<?php
}
?>
</table>
<br>
<a href="add_faculty.php"><input type="submit" value="ADD"></a>
<br>
<br>
<a href="Admin_page.html"><input type="submit" value="BACK"></a>
</center>
</body>
</html>