<?php 
include('config.php');

$sql = "SELECT * FROM supplier ";

	$result = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_array($result))
	{
		$options = $options."<option>$row[0]</option>";
	}

?>


<?php 
include('config.php');



if(isset($_POST['search']))
{
	$id = $_POST['sid'];
	
	$sql = "SELECT sname, semail, smobile, saddress FROM supplier where sid= '$id' LIMIT 1";
	
	$result = mysqli_query($conn,$sql);
	
	while($row = mysqli_fetch_array($result))	
	{
		$name =$row['sname'];
		$emial = $row['semail'];
		$mobile=$row['smobile'];
		$address =$row['saddress'];

	}
	
	mysqli_free_result($result);
	mysqli_close($conn);

}
else
{
	$name ="";
	$emial = "";
	$mobile="";
	$address ="";
}



?>
<?php 
include('config.php');

if(isset($_POST['update']))
{
	$id = $_POST['sid'];
    $sql = "UPDATE supplier SET sid = '".$_POST["sid"]."', sname ='".$_POST["SName"]."',semail ='".$_POST["SEmail"]."', smobile ='".$_POST["SMobile"]."', saddress ='".$_POST["SAddress"]."' where sid= '$id'" ;

    $result = mysqli_query($conn,$sql);
}

?>



<html>
<head>	
	<title>Edit Supplier</title>
	
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

		
	</style>
</head>
	
	
	<body>
		
		<form action="editSupplier.php" method="post">
			
		<div class="buttons">
			<h1 style="color:White;text-align: center;">Supplier</h1>
			<button type="button" onclick="window.location='home.php';">Home</button>
		<button type="button" onclick="window.location='addSupplier.php';">ADD</button>
		
		<button type="button" onclick="window.location='editSupplier.php'">EDIT</button>
		
		<button type="button" onclick="window.location='deleteSupplier.php'">DELETE</button>
		<h3 style="color:white">Edit Supplier</h3>
			<td>
			<select name="sid" style="padding: 5px;width: 255px;height:30px;margin-left: -23px;margin-bottom: 10px;">
					<?php echo $options?>
			</select>
		</td>
					
			<input type="submit"  name="search" value="Search" style="background-color: #4CAF50;color: white;padding:8px 20px; margin:10px 0; border: none;cursor: pointer;width: 10%; ">

			
			
			</div>
		
		
		
		
		<div class="myTable" style="border:2px solid white; padding:10px;margin-left: 430; margin-right: 450px;">
		<table>

			
			<tr>
				<td>    <label for="Sname" style="color:white"><b>Supplier Name:</b></label></td>
				<td><input type="text" placeholder="Enter Supplier Name" name="SName" value="<?php echo $name; ?>" style="padding:5px; width:150%"></td>
			</tr>
			
			<tr>
				<td>    <label for="SEmail" style="color:white"><b>Supplier Email:</b></label></td>
				<td><input type="text" placeholder="Enter Supplier Email" name="SEmail" value="<?php echo $emial;?>" style="padding:5px; width:150%"></td>
			</tr>
			
			<tr>
				<td>    <label for="Smobile" style="color:white"><b>Supplier Mobile</b></label></td>
				<td><input type="Number" placeholder=" Phone Number" name="SMobile" value="<?php echo $mobile;?>"  style="padding:5px; width:150%"></td>
			</tr>
			
			<tr>
				<td>    <label for="Smobile" style="color:white"><b>Supplier Address</b></label></td>
				<td><input name="SAddress"  placeholder="Enter Address" value="<?php echo $address ;?>" style="padding:5px; width:150%"></td>
			</tr>
			
			<tr>
				<td colspan="3">
					<input type="submit" name="update" value="Update" style="background-color: #4CAF50;color: white;padding: 15px 50px 15px 15px;margin-left: 150px;margin-top:10px;														  border: none;cursor: pointer;width: 10%;">
				</td>
			</tr>
		</table>		
    
			</div>
			
			
		</form>
			</body>
</html>