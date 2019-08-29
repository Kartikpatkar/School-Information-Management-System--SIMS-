<html>
<head>
<title>checking........</title>
</head>
<?php
include 'database.php';

$name=$_POST["name"];
$DOB=$_POST["dob"];
$fname=$_POST["fathername"];
$gender=$_POST["gender"];
$paddress=$_POST["paddress"];
$caddress=$_POST["caddress"];
$state=$_POST["state"];
$class=$_POST["class"];
$district=$_POST["district"];
$pincode=$_POST["pincode"];
$emailid=$_POST["emailid"];
$mobileno=$_POST["mobileno"];
  
mysqli_query($connect,"INSERT INTO student_detail(Name,DOB,Father_Name,Gender,Permanent_Address,Current_Address,State,Class,District,PinCode,Email_ID,Mobile_No)VALUES('$name','$DOB','$fname','$gender','$paddress','$caddress','$state','$class','$district','$pincode','$emailid','$mobileno')"); 
mysqli_query($connect,"INSERT INTO student_marks(Name)VALUES('$name')"); 
mysqli_query($connect,"INSERT INTO attendance(Name)VALUES('$name')");

if(mysqli_affected_rows($connect)>0)
{  
?>
<script>
	alert("Successfull");
	location="homepage.php";
</script>
<?php
}
else  
{   
?>  
<script>
	alert("Successfull");
	location="homepage.php";
</script>
<?php
}       
?>
</html>