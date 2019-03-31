<?php 
	
?>


<html>
<head>	
	<title>Home</title>
	
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
	margin-top: 50px;
}

		
	</style>
</head>
	
	
	<body>
		
		<h1 style="color:White;text-align: center;margin-top: 150px;font-family: fantasy;font-size: 50px;">Eagle Dyne Supplier Relationship</h1>
		
		
		<div class="buttons">
			<h1 style="color:White;text-align: center;">Supplier</h1>
		<button type="button" onclick="window.location='addSupplier.php';">ADD</button>
		
		<button type="button" onclick="window.location='editSupplier.php'">EDIT</button>
		
		<button type="button" onclick="window.location='deleteSupplier.php'">DELETE</button>
		
			</div>
		
				<div class="buttons">
			<h1 style="color:White;text-align: center;">Product</h1>
		<button type="button" onclick="window.location='addProduct.php'">ADD</button>
		
		<button type="button" onclick="window.location='editProduct.php'">EDIT</button>
		
		<button type="button" onclick="window.location='deleteProduct.php'">DELETE</button>
		
			</div>
	</body>
</html>