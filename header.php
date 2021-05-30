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
                        
						
					<!-- row -->  
						
				</div>
                    
            	
            </div>
                
                </div>
                
                </div>
		
				<!-- container -->
			
			<!-- /MAIN HEADER -->
		
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
  
  <div class="alert-message"></div>
    
        <br>
        
    <div class="container">
        <?php
   $con = mysqli_connect('localhost:3307','root','');
   mysqli_select_db($con,'shopping_cart_db');
  
    $q= "SELECT * FROM product" ;
    $result_set= mysqli_query($con, $q);
     while($row = mysqli_fetch_array($result_set, MYSQLI_ASSOC))
       {
        ?>

        <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                  
              <a href="#"><img class="card-img-top" src="images/<?php echo $row['product_image']?>" width="250px" height="300px"></a>
			  
              <div class="card-body">
                  
                <h4 class="card-title text-primary"><?php echo $row["product_name"]; ?></h4>
                <h5>Rs.<?php echo $row["product_price"]; ?></h5>
              </div>
			  
              <div class="card-footer">
				<form class="form-submit">
					<input type="hidden" class="pid" value="1">
					<input type="hidden" class="pname" value="<?php echo $row["product_name"]; ?>">
					<input type="hidden" class="pprice" value="<?php echo $row["product_price"]; ?>">
					<input type="hidden" class="pcode" value="<?php echo $row["product_code"]; ?>">
                <button id="addItem" class="btn btn-success btn-md" type="button">Add to Cart</button>
			     	</form>
              </div>
                </div>
    </div>
          
        <?php
      
    }
?>       
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
            console.log("Here");
			e.preventDefault();
			var form = $(this).closest(".form-submit");
			var id = form.find(".pid").val();
			var name = form.find(".pname").val();
			var price = form.find(".pprice").val();
			var image = form.find(".pimage").val();
			var code = form.find(".pcode").val();
			
            console.log("Here2");
            console.log(form);
            console.log(form.find(".pid").val())
            
			$.ajax({
				url: "/project/action.php",
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
 
                