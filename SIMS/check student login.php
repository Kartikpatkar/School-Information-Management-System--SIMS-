<html>
<head>
<title>checking.......</title>
</head>
<?php 
include 'database.php';

$name=$_POST['studentname'];          
$rollno=$_POST['rollno'];   
 
$sql="SELECT * FROM student_detail WHERE Name='$name' and Roll_No='$rollno'";  
$result=mysqli_query($connect,$sql);  

$count=mysqli_num_rows($result);  

if($count==1) 
{  
?>
<script>
	alert("You have logged in.");
	location="student_page.php?Roll_No=<?php echo $rollno ?>";
</script>
<?php
}
 else  
{  
?>
<script>
	alert("Wrong Name or Roll Number.");
	location="Student Login.html";
</script>
<?php 
} 
?>   
</html>