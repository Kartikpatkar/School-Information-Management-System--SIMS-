<html>
<head>
	<title>Add Admin</title>
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
		var x=document.forms["Add_Admin"]["id"].value;
		if(x==null||x=="")
		{
			alert("Admin ID field is empty.");
			return false;
		}
		var a=document.forms["Add_Admin"]["name"].value;
		if(a==null||a=="")
		{
			alert("Username field is empty.");
			return false;
		}
		var b=document.forms["Add_Admin"]["password"].value;
		if(b==null||b=="")
		{
			alert("Password field is empty");
			return false;
		}
		var c=document.forms["Add_Admin"]["confirm_password"].value;
		if(c==null||c==""||c!=b)
		{
			alert("Confirm Password Number field is empty.");
			return false;
		}
		if(c!=b)
		{
			alert("Password is not confirmed.");
			return false;
		}
		return true;
	}
	</script>
</head>
<body>
<form action="add_admin.php" method="post" name="Add_Admin" onsubmit="return validateForm()";>
<center>
	<table cellpadding="4" width="50%" bgcolor="gray" align="left-side" cellspacing="4">
	
		<tr>
			<td colspan=2>
			<center><font size=9.5><b>Registor</b></font></center>
			</td>
		</tr>
		<tr>
			<td>Admin ID</td>
			<td><input type="text" name="id" size="30"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="name" size="30"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" size="30"></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="confirm_password" size="30"></td>
		</tr>
		<tr>
			<td><input type="reset"></td>
			<td><input type="submit" value="Sign Up"><td>
	</table>
</center>	
</form>
<center><a href="Admin_list.php"><input type="submit" value="BACK"></a></center>
</body>
</html>