<?php
session_start();
?>

<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
                        <a href=sell.php>Sell Boooks </a>   
                       </li>
                    <li>
                           <a href="contact.php">Contact Us</a>
                       </li>
                         <li>
                       
                     
                       <a href="login/index.php"> Login</a>
                           
                       </li>
                           
                 <a class="btn btn-success btn-sm mt-1" href="cart.php">
                <i class="fa fa-shopping-cart"></i>
                <span class="badge badge-light" id="cart-item"></span>
            </a> 
                 <!-- nav navbar-nav left Finish -->
                   
                   </ul>
                         
            </div>
          </div>

                </header>

    
    <div class="container">
    
    <h2> <b> Contact us</b></h2><br>
        <p1>  Hamro Books <br>
        Kathmandu, Nepal <br>
        Cell: +977 9818020319 <br> 
        hamrobooksnepal@gmail.com <br>
    </p1>
        <br><br><br><br>  
        <br><br><br><br>
    
    
    </div>
      <!-- Contact -->
      
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

    </body>
    
</html>
