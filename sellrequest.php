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
	                        <a href="#"> <img src="images/lg.JPG" style=" width: 200px; height: 60px; "></a>
                                
								<font style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif">
                                       
                                </font>					
							</div>
						</div>
                        
						
					<!-- row -->  
						
				</div>
                    
            	
            </div>
                
                </div>
                
                </div>
      <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
        <div class="wrapper">
                   <ul class="nav navbar-nav "><!-- nav navbar-nav left Begin -->
                       
                 <h2>Sell Books </h2> 
                      
                  <!--     <li> 
                          <a class="btn btn-success btn-sm mt-1" href="cart.php">
                <i class="fa fa-shopping-cart"></i>
                <span class="badge badge-light" id="cart-item"></span>
            </a> 
                  </li>-->
                       
                      
                      
                     
                 <!-- nav navbar-nav left Finish -->
                   
                   </ul>
            	        
                
                                 
            </div>
           
          </div>
        </header>
        <form action="/project/insertrequest.php" method="POST">
            
  <div class="form-group">
    <label>Full Name</label>
    <input type="text" name="full_name" class="form-control" id="exampleFormControlInput1" placeholder="Full Name">
  </div>
  <div class="form-group">
    <label >Phone Number</label>
    <input type="number" name="phone_num" class="form-control" id="exampleFormControlInput1" placeholder="Phone number">
  
  </div>
  <div class="form-group">
  
      <label >Book Name</label>
 
      <input type="text" name="book_name" class="form-control" id="exampleFormControlInput1" placeholder="Book Name">
     
  </div>
   <div class="form-group">
    <label for="exampleFormControlFile1">Book Image</label>
    <input type="file"  name="book_image" class="form-control-file" id="exampleFormControlFile1" multiple>
  </div>
       <center>   <input type="submit" value="Submit Request" name="submit"></center>   
</form>
    </body>
</html>