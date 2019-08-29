<html>
<head><title>Checking.......</title>
</head>
<body>
<?php

include 'database.php';
$sql="SELECT * FROM student_detail";
$result=mysqli_query($connect,$sql);

$id=$_GET['Roll_No'];

$sql="DELETE FROM student_detail WHERE Roll_No='$id'";
$result=mysqli_query($connect,$sql);
$sql="DELETE FROM student_marks WHERE Roll_No='$id'";
$result=mysqli_query($connect,$sql);

if($result)
{
?>
<script>
	alert("Deleted Successfully.");
	location="student_list.php";
</script>
<?php
}
else
{
?>
<script>
	alert("Error");
	location="student_list.php";
</script>
<?php
}
?>
</body>
</html>