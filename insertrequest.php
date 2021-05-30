<!DOCTYPE html> 
<html> 

<head> 

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
		$fullname = $_POST['full_name']; 
		$phnum = $_POST['phone_num'];
        $bookname = $_POST['book_name'];
        
$image = $_POST['book_image'];
 	 
		
		
		// Performing insert query execution 
		// here our table name is college 
		$sql = 
		"INSERT INTO sellrequest(fullname,phnum,bookname,image)
				VALUES('$fullname','$phnum','$bookname','$image')";
		if(mysqli_query($conn, $sql)){ 
			echo "<h3>Submitted request, Admin will Contact you shortly.</h3>"; 

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
