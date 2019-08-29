<?php
include 'database.php';

$name=$_POST["name"];
$phone=$_POST["phone_no"];
  
mysqli_query($connect,"INSERT INTO faculty_details(name,phone_no)VALUES('$name','$phone')"); 

if(mysqli_affected_rows($connect)>0)
{  
?>
<script>
	alert("Successfull");
	location="faculty_list.php";
</script>
<?php
}
else  
{     
?>
<script>
	alert("ERROR!!");
	location="add_faculty.php";
</script>
<?php
}
?>