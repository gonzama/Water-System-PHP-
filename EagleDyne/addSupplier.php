<?php
include('config.php');

if(isset($_POST['submit']))
{
    $sql = "INSERT INTO supplier (sid, sname, semail, smobile, saddress)
    VALUES ('".$_POST["SId"]."','".$_POST["Sname"]."','".$_POST["SEmail"]."','".$_POST["Smobile"]."','".$_POST["Saddress"]."')";

    $result = mysqli_query($conn,$sql);
}
?>

?>



<html>
<head>	
	<title>Add Supplier</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<style>
		button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}

		button:hover{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
	opacity: 0.8;
}
		.buttons
{
	text-align: center;
	margin-top: 100px;
}
		
	.buttons	input[type=text] {
    width: 20%;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
	padding: 5px;
}

		
	</style>
</head>
	
	
	<body>
		
		<form action="addSupplier.php" method="post">
		
		<div class="buttons">
			<h1 style="color:White;text-align: center;">Supplier</h1>
			<button type="button" onclick="window.location='home.php';">Home</button>
		<button type="button" onclick="window.location='addSupplier.php';">ADD</button>
		
		<button type="button" onclick="window.location='editSupplier.php'">EDIT</button>
		
		<button type="button" onclick="window.location='deleteSupplier.php'">DELETE</button>
			<h3 style="color:white">Add Supplier</h3>
			
		</div>
		
		<div class="myTable" style="border:2px solid white; padding:10px;margin-left: 430; margin-right: 450px;">
		<table>
			<tr>
				<td>    <label for="SId" style="color:white"><b>Supplier ID:</b></label></td>
				<td><input type="text"  id="sid" placeholder="Enter Supplier ID" name="SId" required style="padding:5px; width:150%"></td>
				
			</tr>
			
			<tr>
				<td>    <label for="Sname" style="color:white"><b>Supplier Name:</b></label></td>
				<td><input type="text" id="sname" placeholder="Enter Supplier Name" name="Sname" required style="padding:5px; width:150%"></td>
			</tr>
			
			<tr>
				<td>    <label for="SEmail" style="color:white"><b>Supplier Email:</b></label></td>
				<td><input type="text" id="semail" placeholder="Enter Supplier Email" name="SEmail" required style="padding:5px; width:150%"></td>
			</tr>
			
			<tr>
				<td>    <label for="Smobile" style="color:white"><b>Supplier Mobile</b></label></td>
				<td><input type="Number" id="smobile" placeholder=" Phone Number" name="Smobile" required style="padding:5px; width:150%"></td>
			</tr>
			
			<tr>
				<td>    <label for="Smobile" style="color:white"><b>Supplier Address</b></label></td>
				<td><textarea name="Saddress"  placeholder="Enter Address" style="padding:5px; width:150%"></textarea></td>
			</tr>
			
			<tr>
				<td colspan="3">
					<input type="submit" value="Submit"  name="submit"style="background-color: #4CAF50;color: white;padding: 15px 50px 15px 15px;margin-left: 150px;margin-top:10px;														  border: none;cursor: pointer;width: 10%;">
				</td>
			</tr>
		</table>		
    
			</div>	
		
		
			 
			 </form>
		
			</body>
</html>