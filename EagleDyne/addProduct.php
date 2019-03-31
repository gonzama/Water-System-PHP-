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
$id = $_POST["sid"];
echo $id;
?>

<?php 
include('config.php');


if(isset($_POST['submit']))
{
	$id = $_POST["sid"];
	$sql = "INSERT INTO product (pid, pname, type,supplierid)
    VALUES ('".$_POST["PId"]."','".$_POST["PName"]."','".$_POST["PType"]."','".$_POST["sid"]."')";

    $result = mysqli_query($conn,$sql);
}
?>


<html>
<head>	
	<title>Add Product</title>
	
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
		
		<form action="addProduct.php" method="post">
			
		
			<div class="buttons">
			<h1 style="color:White;text-align: center;">Product</h1>
				<button type="button" onclick="window.location='home.php';">Home</button>
		<button type="button" onclick="window.location='addProduct.php'">ADD</button>
		
		<button type="button" onclick="window.location='editProduct.php'">EDIT</button>
		
		<button type="button" onclick="window.location='deleteProduct.php'">DELETE</button>
		<h3 style="color:white">Add Product</h3>
		</div>
		
		<div class="myTable" style="border:2px solid white; padding:10px;margin-left: 430; margin-right: 450px;">
		<table>
			<tr>
				<td>    <label for="PId" style="color:white"><b>Product ID:</b></label></td>
				<td><input type="text" placeholder="Enter Product ID" name="PId" required style="padding:5px; width:150%"></td>
			</tr>
			
			<tr>
				<td>    <label for="Pname" style="color:white"><b>Supplier Name:</b></label></td>
				<td><input type="text" placeholder="Enter Product Name" name="PName" required style="padding:5px; width:150%"></td>
			</tr>
			
			<tr>
				<td>    <label for="PType" style="color:white"><b>Product Type:</b></label></td>
				<td><input type="text" placeholder="Enter Product Type" name="PType" required style="padding:5px; width:150%"></td>
			</tr>
			<tr>
				<td>    <label for="PType" style="color:white"><b>Supplier Id:</b></label></td>
				<td>
					<select name="sid" style="padding: 5px;width: 150%;height: 30px;margin-left: 0px;margin-bottom: 10px;" >
					<?php echo $options?>
					</select></td>
			</tr>
			
		
			
			<tr>
				<td colspan="3">
					<input type="submit" value="Submit" name="submit" style="background-color: #4CAF50;color: white;padding: 15px 50px 15px 15px;margin-left: 150px;margin-top:10px;														  border: none;cursor: pointer;width: 10%;">
				</td>
			</tr>
		</table>		
    
			</div>	
		
		</form>
		
			</body>
</html>