<html>
<head>
	<title>Student entry form</title>
	<style>
	input[type=date],select 
	{
		
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}
	input[type=text],select 
	{
		
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}
	</style>
	<style>
body {
background-position:center;
background-size:100%;
background-image: url("su.jpg");
background-repeat: no-repeat;
}
h1{
color:#F39C12;
}
h2{
color:#F39C12;
}
</style>
	<script type="text/javascript">
	function validateForm()
	{
		var a=document.forms["Registration"]["name"].value;
		if(a==null||a=="")
		{
			alert("Name field is empty.");
			return false;
		}
		var b=document.forms["Registration"]["dob"].value;
		if(b==null||b=="")
		{
			alert("DOB field is empty");
			return false;
		}
		//var c=document.forms["Registration"]["gender"].value;
		if(c==null||c=="")
		{
			alert("Gender field is empty.");
			return false;
			c=1;
		}
		var d=document.forms["Registration"]["fathername"].value;
		if(d==null||d=="")
		{
			alert("Father name field is empty.");
			return false;
		}
		var e=document.forms["Registration"]["paddress"].value;
		if(e==null||e=="")
		{
			alert("Permanent Address field is empty.");
			return false;
		}
		var f=document.forms["Registration"]["caddress"].value;
		if(f==null||f=="")
		{
			alert("Current Address field is empty.");
			return false;
		}
		var g=document.forms["Registration"]["state"].value;
		if(g==null||g=="")
		{
			alert("State field is empty.");
			return false;
		}
		var h=document.forms["Registration"]["class"].value;
		if(h==null||h=="")
		{
			alert("Class field is empty.");
			return false;
		}
		var i=document.forms["Registration"]["district"].value;
		if(i==null||i=="")
		{
			alert("District field is empty.");
			return false;
		}
		var j=document.forms["Registration"]["pincode"].value;
		if(j==null||j=="")
		{
			alert("Pincode field is empty.");
			return false;
		}
		var k=document.forms["Registration"]["emailId"].value;
		if(k==null||k=="")
		{
			alert("Email ID field is empty.");
			return false;
		}
		var l=document.forms["Registration"]["mobileno"].value;
		if(l==null||l=="")
		{
			alert("Mobile Number field is empty.");
			return false;
		}
		return true;
	}
	</script>
</head>
<body style="background-color:gray;">
<form action="Registration.php" method="post" name="Registration" onsubmit="return validateForm()";>
<center>
<h2>
	<table cellpadding="4" width="50%"  align="left-side" cellspacing="4">
	
		<tr>
			<td colspan=2>
			<center><h1><font size=10><b><style="white">Registration</style></b></font></h1></center>
			</td>
		</tr>

		<tr>
			<td><h2>Name</h2></td>
			<td><input type="text" name="name" id="name" size="30"></td>
		</tr>
		<tr>
			<td><h2>Date of birth</h2></td>
			<td><input type="date" name="dob" id="dob" size="30"></td>
		</tr>
		<tr>
			<td><h2>Gender</h2></td>
			<td>
				<input type="radio" name="gender" value="Male" id="one"><font color="white">Male</font>
				<input type="radio" name="gender" value="Female" id="two"><font color="white">Female</font>
			</td>
		</tr>

		<tr>
			<td><h2>Father name</h2></td>
			<td><input type="text" name="fathername" id="fathername" size="30"></td>
		</tr>
	
		<tr>
			<td><h2>Permanent Address</h2></td>
			<td><input type="text" name="paddress" id="paddress" size="30"></td>
		</tr>

		<tr>
			<td><h2>Current address</h2></td>
			<td><input type="text" name="caddress"id="caddress" size="30">
			</td>
		</tr>

		

		<tr>
		<td><h2>State</h2></td>
			<td>
			<select name="state" id="state" placeholder="select..">
			<option value="-1" selected>select...</option>
				<option value="Delhi">DELHI</option>
				<option value="Rajasthan">RAJASTHAN</option>
				<option value="Kerala">KERALA</option>
				<option value="Goa">GOA</option>
				<option value="Utter Pradesh">UTTAR PRADESH</option>
				<option value="Tamil Nadu">TAMIL NADU</option>
				<option value="Maharashtra">MAHARASHTRA</option>
				<option value="Jammu and Kashmir">JAMMU & KASHMIR</option>
				<option value="Punjab">PUNJAB</option>
				<option value="Andra Pradesh">ANDRA PRADESH</option>
				<option value="Gujarath">GUJARATH</option>
				<option value="Other">OTHER</option>
			</select></td>
		</tr>

		<tr>
			<td><h2>Class</h2></td>
			<td><select name="class" id="class">
			<option value="class-1">CLASS-1</option>
			<option value="class-2">CLASS-2</option>
			<option value="class-3">CLASS-3</option>
			<option value="class-4">CLASS-4</option>
			<option value="class-5">CLASS-5</option>
			<option value="class-6">CLASS-6</option>
			<option value="class-7">CLASS-7</option>
			<option value="class-8">CLASS-8</option>
			<option value="class-9">CLASS-9</option>
			<option value="class-10">CLASS-10</option>
			<option value="class-11">CLASS-11</option>
			<option value="class-12">CLASS-12</option>
			<option value="-1" selected>select...</option>
			</select></td>
			</tr>

		<tr>
			<td><h2>District</h2></td>
			<td><select name="district" id="district">
			<option value="-1" selected>select..</option>
			<option value="Nalanda">NORTH</option>
			<option value="Nalanda">SOUTH</option>
		</select></td>

		</tr>
		
		<tr>
			<td><h2>PinCode</h2></td>
			<td><input type="text" name="pincode" id="pincode" size="30"></td>
		</tr>
		<tr>
			<td><h2>EmailId</h2></td>
			<td><input type="text" name="emailid" id="emailid" size="30"></td>
		</tr>

		
		<tr>
			<td><h2>MobileNo</h2></td>
			<td><input type="text" name="mobileno" id="mobileno" size="30"></td>
		</tr>
		<tr>
			<td>
				<input type="reset">
			</td>
			<td colspan="2">
				<input type="submit" value="Submit">
			</td>
		</tr>
		<tr>
		</tr>
	</table>
	</h2>
</center>	
</form>
<center><a href="homepage.php"><input type="submit" value="Home Page"></a></center>
</body>
</html>