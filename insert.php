<!DOCTYPE html> 
<html> 

<head> 
	<title>Insert Page page</title> 
</head> 

<body> 
	<center> 
		<?php 

		// servername => localhost 
		// username => root 
		// password => empty 
		// database name => staff 
		$conn = mysqli_connect("localhost:3307", "root", "", "shopping_cart_db"); 
		
		// Check connection 
		if($conn === false){ 
			die("ERROR: Could not connect. "
				. mysqli_connect_error()); 
		} 
		
		// Taking all 5 values from the form data(input) 
		$product_name = $_POST['product_name']; 
		$product_price = $_POST['product_price']; 
$product_image = $_POST['product_image'];
        $product_code = $_POST['product_code']; 
	 
		
		
		// Performing insert query execution 
		// here our table name is college 
		$sql = 
		"INSERT INTO product(product_name,product_price,product_image,product_code)
				VALUES('$product_name','$product_price','$product_image','$product_code')";
		if(mysqli_query($conn, $sql)){ 
			echo "<h3>Book data stored in a database successfully.</h3>"; 

		} else{ 
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn); 
		} 
		
		// Close connection 
		mysqli_close($conn); 
		?> 
	</center> 
</body> 

</html> 
