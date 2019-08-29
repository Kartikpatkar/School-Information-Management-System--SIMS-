<?php
include 'database.php';

$id=$_GET['name'];

$sql="DELETE FROM faculty_details WHERE name='$id'";
$result=mysqli_query($connect,$sql);
?>
<?php
if($result)
{
?>
<script>
	alert("Deleted Succesfully.");
	location="faculty_list.php";
</script>
<?php
}
else
{
?>
<script>
	alert("ERROR!");
	location="faculty_list.php";
</script>
<?php
}
?>
</body>
</html>