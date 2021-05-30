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
		
				<!-- container -->
			
			<!-- /MAIN HEADER -->
		
		<!-- /HEADER -->
	  <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
        <div class="wrapper">
                   <ul class="nav navbar-nav "><!-- nav navbar-nav left Begin -->
                       
                   <li>
                        <a href="/project/addbooks.php">Add Books </a>   
                       </li>
                    <li>
                           <a href="readdata.php">Orders</a>
                       </li>
                       
                       <li>
                       <a href="readsellrequest.php"> Sell request</a>
                       </li>
                      
                       <li>
                       <a href="login/admin/index.php"> Logout</a>
                       </li>
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
<table border="3"> 
    <tr>
      
        <th>Username</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Mode of Payment</th>
        <th>Books</th>
        <th>Total Amount</th>
           
    </tr>

<?php
   $con = mysqli_connect('localhost:3307','root','');
   mysqli_select_db($con,'shopping_cart_db');
  
    $q= "SELECT * FROM orders" ;
    $result_set= mysqli_query($con, $q);
     while($row = mysqli_fetch_array($result_set, MYSQLI_ASSOC))
       {
        ?>

        <tr>
      
            <td> <?php echo $row["username"]; ?> </td>
            <td> <?php echo $row["email"]; ?> </td>
            <td> <?php echo $row["phone"]; ?> </td>
            <td> <?php echo $row["address"]; ?> </td>
              <td> <?php echo $row["payment_mode"]; ?> </td>
              <td> <?php echo $row["products"]; ?> </td>
              <td> Rs. <?php echo $row["paid_amount"]; ?> </td>
          </tr>
          
        <?php
      
    }
?>
</table>
    </body>
</html>