<html>
<head>
	<title>Add Faculty</title>
	<style>
body {
color: #FFFFFF ;
background-position:center;
background-size:100%;
background-image: url("dack.jpg");
background-repeat: no-repeat;
}
</style>
	<style>
	input[type=text], [type=password]
	{
		
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}
	</style>
	<script type="text/javascript">
	function validateForm()
	{
		var x=document.forms["Add_faculty"]["name"].value;
		if(x==null||x=="")
		{
			alert("Name field is empty.");
			return false;
		}
		var a=document.forms["Add_faculty"]["phone_no"].value;
		if(a==null||a=="")
		{
			alert("Phone no. field is empty.");
			return false;
		}
		return true;
	}
	</script>
</head>
<body>
<form action="add_faculty_main.php" method="post" name="Add_faculty" onsubmit="return validateForm()";>
<center>
	<table cellpadding="4" width="50%" bgcolor="gray" align="left-side" cellspacing="4">
	
		<tr>
			<td colspan=2>
			<center><font size=9.5><b>Add faculty</b></font></center>
			</td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" size="30"></td>
		</tr>
		<tr>
			<td>Phone No.</td>
			<td><input type="text" name="phone_no" size="30"></td>
		</tr>
			<td><input type="reset"></td>
			<td><input type="submit" value="ADD"><td>
	</table>
</center>	
</form>
<center><a href="faculty_list.php"><input type="submit" value="BACK"></a></center>
</body>
</html>