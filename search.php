<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Hamro Books</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css?v=<?php echo time();?>"/> <!-- force load -->
        <link type="text/css" rel="stylesheet" href="css/slide.css?v=<?php echo time();?>"/>
        
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    </head>

    <body>
        <head>
   </head>
        
        <!-- HEADER -->
<header>
    
            <div id="top-header">
			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
                
				<div class="container">
                    
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
	                        <a href="header.php"> <img src="images/lg.JPG" style=" width: 200px; height: 60px; "></a>
                                
								<font style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif">
                                       
                                </font>					
							</div>
						</div>
                        
						<div class="col-md-6">
							<div class="header-search">
								<form action="" method="post">
									<input class="input" name="product_name" id="search" type="text" placeholder="Search by Book Name">
									<button name="search" type="submit" id="search_btn" class="search-btn">Search</button>
							
                                </form>
								
					</div>

					</div>
					<!-- row -->  
						
				</div>
                    
            	
            </div>
                
                </div>
                
                </div>
		
        <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost:3307", "root", "", "shopping_cart_db");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if(isset($_POST['search'])){
// Attempt select query execution
$sql = "SELECT * FROM product WHERE product_name='product_name'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
                echo "<p>id</p>";
                echo "<p>product_name</p>";
                echo "<p>product_price</p>";
        while($row = mysqli_fetch_array($result)){
           
                echo "<p>" . $row['id'] . "</p>";
                echo "<p>" . $row['product_name'] . "</p>";
                echo "<p>" . $row['product_price'] . "</p>";
            
        }
    
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
}
?>
		
		<!-- /HEADER -->
	  <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
        <div class="wrapper">
                   <ul class="nav navbar-nav "><!-- nav navbar-nav left Begin -->
                       <li class="active">
                           <a href="header.php">Home</a>
                       </li>
                       
                   <li>
                        <a href="sell.php">Sell Boooks </a>   
                       </li>
                    <li>
                           <a href="contact.php">Contact Us</a>
                       </li>
                       <li>
                       
                     
                       <a href="login/index.php"> Login</a>
                                </li>
                  <!--     <li> 
                          <a class="btn btn-success btn-sm mt-1" href="cart.php">
                <i class="fa fa-shopping-cart"></i>
                <span class="badge badge-light" id="cart-item"></span>
            </a> 
                  </li>-->
                       
                      
                      <a class="btn btn-success btn-sm mt-1" href="cart.php">
                <i class="fa fa-shopping-cart"></i>
                <span class="badge badge-light" id="cart-item"></span>
            </a> 
                     
                 <!-- nav navbar-nav left Finish -->
                   
                   </ul>
            	        
                
                                 
            </div>
           
          </div>
        </header>
        
        <div class="slideshow-container">

            <div class="mySlides fade">
  <img src="images/slidertwo.jpg.png" width="1343" height="420">
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/slidertwo.jpg.png" width="1343" height="420">
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/slidertwo.jpg.png" width="1343" height="420">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
        
        
    <div class="container">
        
       <h3><b>All Books </b></h3>
   
        </div>
  <!-- Page Content -->
        
    <div class="search_book">
        
    </div>
        
   
  
  <div class="alert-message"></div>
  
  <div class="container">

    <div class="row">
		
        <div class="row">
		

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/c.jpg" width="250px" height="300px"></a>
			  
              <div class="card-body">
                <h4 class="card-title text-primary">C programming</h4>
                <h5>Rs.200</h5>
              </div>
			  
              <div class="card-footer">
				<form class="form-submit">
					<input type="hidden" class="pid" value="1">
					<input type="hidden" class="pname" value="C programming">
					<input type="hidden" class="pprice" value="200">
					<input type="hidden" class="pimage" value="c.jpg">
					<input type="hidden" class="pcode" value="p1000">
                    <button id="addItem" class="btn btn-success btn-md">Add to Cart<a href="project/login/index.php"></a></button>
				</form>
              </div>
                </div>
            
          </div>
        </div>
        <br>
        
        
    
     <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-9">
            <h6>Hamro Books</h6>
            <p class="text-justify">Hamro Books is an online second hand bookstore, physically based in Kathmandu, Nepal. At Hamro Books, you can browse and buy used books online at reasonable prices.</p>
          </div>

        

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="about.php">About Us</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="sell.php">Sell Books</a></li>
                          </ul>
          </div>
        </div>
        <hr>
      </div>
      
        <div class="container">
          <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
                Hamro Books.
            </p>
          </div>

          
        </div>
      </div>

</footer>   
        
<script src="JS/n.js"></script>
    
<script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  
  <script type="text/javascript">
	$(document).ready(function(){ 
		$(document).on("click", "#addItem", function(e){	
			e.preventDefault();
			var form = $(this).closest(".form-submit");
			var id = form.find(".pid").val();
			var name = form.find(".pname").val();
			var price = form.find(".pprice").val();
			var image = form.find(".pimage").val();
			var code = form.find(".pcode").val();
			
			$.ajax({
				url: "action.php",
				method: "post",
				data: {pid:id, pname:name, pprice:price, pimage:image, pcode:code},
				success:function(response){
					$(".alert-message").html(response);
					window.scrollTo(0,0);
					load_cart_item_number();
				} 
			});
		});
		
		load_cart_item_number();
		
		function load_cart_item_number(){
			$.ajax({
				url: "action.php",
				method: "get",
				data: {cartItem:"cart_item"},
				success:function(response){
					$("#cart-item").html(response);
				}
				
			});
		}	
	});
  </script>
		
</body>
</html>

    
                