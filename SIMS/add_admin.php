<?php
include 'database.php';

$id=$_POST["id"];
$name=$_POST["name"];
$password=$_POST["password"];
  
mysqli_query($connect,"INSERT INTO admin_detail(Admin_Id,Username,Password)VALUES('$id','$name','$password')"); 

if(mysqli_affected_rows($connect)>0)
{  
?>
<script>
	alert("Successfull");
	location="Admin_list.php";
</script>
<?php
}
else  
{     
?>
<script>
	alert("ERROR!!");
	location="add_admin_main.php";
</script>
<?php
}
?>