<?php
include 'database.php';

$id=$_GET['Admin_Id'];

$sql="DELETE FROM admin_detail WHERE Admin_Id='$id'";
$result=mysqli_query($connect,$sql);
?>
<?php
if($result)
{
?>
<script>
	alert("Deleted Succesfully.");
	location="Admin_list.php";
</script>
<?php
}
else
{
?>
<script>
	alert("ERROR!");
	location="Admin_list.php";
</script>
<?php
}
?>
</body>
</html>