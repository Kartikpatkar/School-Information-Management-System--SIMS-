<?php
include 'database.php';

$Name=$_GET['Name'];
$rollno=$_POST['rollno'];
$eng=$_POST['english'];
$eng_IT=$_POST['eng_IT'];
$hin=$_POST['hindi'];
$hin_IT=$_POST['hin_IT'];
$maths=$_POST['maths'];
$mat_IT=$_POST['mat_IT'];
$sci=$_POST['science'];
$sci_IT=$_POST['sci_IT'];
$ss=$_POST['ss'];
$ss_IT=$_POST['ss_IT'];
$total=$eng+$eng_IT+$hin+$hin_IT+$maths+$mat_IT+$sci+$sci_IT+$ss+$ss_IT;
$attend=$_POST['attendance'];

$sql="UPDATE student_detail SET Roll_No='$rollno' WHERE Name='$Name'";
$result=mysqli_query($connect,$sql);
$sql="UPDATE student_marks SET Roll_No='$rollno' WHERE Name='$Name'";
$result=mysqli_query($connect,$sql);
$sql="UPDATE student_marks SET English='$eng' WHERE Name='$Name'";
$result=mysqli_query($connect,$sql);
$sql="UPDATE student_marks SET Eng_IT='$eng_IT' WHERE Name='$Name'";
$result=mysqli_query($connect,$sql);
$sql="UPDATE student_marks SET Hindi='$hin' WHERE Name='$Name'";
$result=mysqli_query($connect,$sql);
$sql="UPDATE student_marks SET hin_IT='$hin_IT' WHERE Name='$Name'";
$result=mysqli_query($connect,$sql);
$sql="UPDATE student_marks SET Mathematics='$maths' WHERE Name='$Name'";
$result=mysqli_query($connect,$sql);
$sql="UPDATE student_marks SET maths_IT='$mat_IT' WHERE Name='$Name'";
$result=mysqli_query($connect,$sql);
$sql="UPDATE student_marks SET Science='$sci' WHERE Name='$Name'";
$result=mysqli_query($connect,$sql);
$sql="UPDATE student_marks SET sci_IT='$sci_IT' WHERE Name='$Name'";
$result=mysqli_query($connect,$sql);
$sql="UPDATE student_marks SET Social_Science='$ss' WHERE Name='$Name'";
$result=mysqli_query($connect,$sql);
$sql="UPDATE student_marks SET ss_IT='$ss_IT' WHERE Name='$Name'";
$result=mysqli_query($connect,$sql);
$sql="UPDATE student_marks SET Total_Marks='$total' WHERE Name='$Name'";
$result=mysqli_query($connect,$sql);
$sql="UPDATE attendance SET attendance='$attend' WHERE Name='$Name'";
$result=mysqli_query($connect,$sql);

if($result)
{
?>
<script>
	alert("Successful");
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
mysqli_error($connect);
?>