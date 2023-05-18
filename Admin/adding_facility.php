<?php
		
$mess = "";

if(isset($_POST["submit"])) {

	//conncet to the database
	require_once("dbcon/user.php");
	include("dbcon/dbcon.php");	//database connection function

	
	$Facility_No=$_POST["Facility No"];
	$Facility_name=$_POST["Facility Name"];
	$description=$_POST["description"];
	$Price=$_POST["price"];
}
?>
<html>
<head>
	<title>Admin Registration</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="../login_style.css">
	<script language="javascript">
	<!--
		function testform() {
			if(document.user.Facility_No.value=='') {
				alert("Please enter the Facility No");
				return false;
			}
			if(document.user.Facility_name.value=='') {
				alert("Please enter the Facility_name");
				return false;
			}
			if(document.user.Description.value=='') {
				alert("Please enter the Description");
				return false;
			}
			if(document.user.Price.value=='') {
				alert("Please enter the Price");
				return false;

			return confirm("Do you want to ADD");
		}
	-->
	</script>	
</head>

<body >

	<center>
	<?php
		echo $mess;
	?>
	<br><br>
	<form name="user" method="post" action="" onSubmit="return testform()">	
	<div>
	<table>
		<tr><td><h1><center><br><b>Registration Form</b></center></h1></td></tr>
		<tr>
			<td>
				
				
				facility NO:<br>
				<input type="text" name="facility_No" size="40" maxlength="60"><br><br>
				
				Facility Name:<br>
				<input type="text" name="Facility_Name" size="40" maxlength="60"><br><br>
						
				Descripton:<br>
				<input type="text" name="Description" size="40" maxlength="70" align="right"><br><br>
										
				Price:<br>
				<input type="textbox" name="Price" size="12" maxlength="15"><br><br>
				
				<input type="submit" name="submit" value=" Submit " onclick="location.href='admin.php'" class="btn">
				&nbsp;&nbsp;
				<input type="reset" name="reset_s" value="Cancel" onclick="location.href='index.php'" class="btn">
			</td>
		</tr>
	</table><br>
	</div>
	</center>
	
	</form>

</body>
</html>