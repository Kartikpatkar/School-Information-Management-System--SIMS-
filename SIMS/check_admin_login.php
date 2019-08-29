<html>
<head>
<title>checking.......</title>
</head>
<?php 
include 'database.php';

$myusername=$_POST['username'];          
$mypassword=$_POST['password'];   
 
$sql="SELECT * FROM admin_detail WHERE username='$myusername' and password='$mypassword'";  
$result=mysqli_query($connect,$sql);  

$count=mysqli_num_rows($result);  

if($count==1) 
{  
?>
<script>
	alert("You have logged in.");
	location="Admin_page.html";
</script>
<?php

}
 else  
{  
?>
<script>
	alert("Wrong Username or Password.");
	location="Admin Login.html";
</script>
<?php 
} 
?>   
</html>