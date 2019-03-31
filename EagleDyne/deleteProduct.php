<?php 
include('config.php');

$sql = "SELECT * FROM product ";

	$result = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_array($result))
	{
		$options1 = $options1."<option>$row[0]</option>";
	}

?>


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
	$id = $_POST['pid'];
	
	$sql = "SELECT pid,pname, type, supplierId FROM product where pid= '$id' LIMIT 1";
	
	$result = mysqli_query($conn,$sql);
	
	while($row = mysqli_fetch_array($result))	
	{
		$name =$row['pname'];
		$type = $row['type'];
		$sid = $row['supplierId'];
	}
	
	mysqli_free_result($result);
	mysqli_close($conn);

}
else
	{
		$name = "";
		$type = "";
		$sid = $row[0];
		

	}

?>

<?php 
include('config.php');

if(isset($_POST['delete']))
{
	$id = $_POST['pid'];
    $sql = "DELETE FROM product where pid= '$id'" ;

    $result = mysqli_query($conn,$sql);
}

?>




<html>
<head>	
	<title>Delete Product</title>
	
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
		
		<form action="deleteProduct.php" method="post">
						
			<div class="buttons">
			<h1 style="color:White;text-align: center;">Product</h1>
		<button type="button" onclick="window.location='home.php';">Home</button>
		<button type="button" onclick="window.location='addProduct.php'">ADD</button>
		
		<button type="button" onclick="window.location='editProduct.php'">EDIT</button>
		
		<button type="button" onclick="window.location='deleteProduct.php'">DELETE</button>
		<h3 style="color:white">Delete Product</h3>
					<select name="pid" style="padding: 5px;width: 255px;height: 30px;margin-left: -23px;margin-bottom: 10px;">
					<?php echo $options1?>
					</select>
		
				<input type="submit" name="search" value="Search" style="background-color: #4CAF50;color: white;padding:8px 20px; margin:10px 0; border: none;cursor: pointer;width: 10%; ">
		</div>
		
		<div class="myTable" style="border:2px solid white; padding:10px;margin-left: 430; margin-right: 450px;">
		<table>
			
			<tr>
				<td>    <label for="Pname" style="color:white"><b>Supplier Name:</b></label></td>
				<td><input type="text" placeholder="Enter Product Name" name="PName" value="<?php echo $name; ?>" style="padding:5px; width:100%"></td>
			</tr>
			
			<tr>
				<td>    <label for="PType" style="color:white"><b>Product Type:</b></label></td>
				<td><input type="text" placeholder="Enter Product Type" name="PType" value="<?php echo $type; ?>" style="padding:5px; width:100%"></td>
			</tr>
			
			<tr>
				<td><label for="PType" style="color:white"><b>Supplier ID:</b></label></td>
				<td colspan="2">
			<select name="sid" style="padding: 5px;width: 200px;height: 30px;margin-left: 0px;margin-bottom: 10px;">
					<?php echo $options?>
			</select>
		</td>
			
			</tr>
		
			
			<tr>
				<td colspan="3">
					<input type="submit" value="Delete"  name="delete"style="background-color: #4CAF50;color: white;padding: 15px 50px 15px 15px;margin-left: 150px;margin-top:10px;														  border: none;cursor: pointer;width: 10%;">
				</td>
			</tr>
		</table>		
    
			</div>
		
		</form>
	
	</body>
</html>