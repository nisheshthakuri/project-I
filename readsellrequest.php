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
                        <a href="/project/addbooks.php">Add Boooks </a>   
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
      
        <th>Full Name</th>
        <th>Phone Number</th>
        <th>Book name</th>
        <th> Book image</th>
           
    </tr>

<?php
   $con = mysqli_connect('localhost:3307','root','');
   mysqli_select_db($con,'shopping_cart_db');
  
    $q= "SELECT * FROM sellrequest" ;
    $result_set= mysqli_query($con, $q);
     while($row = mysqli_fetch_array($result_set, MYSQLI_ASSOC))
       {
        ?>

        <tr>
            <td> <?php echo $row['fullname']; ?> </td>
            <td> <?php echo $row['phnum']; ?> </td>
         
            <td> <?php echo $row['bookname']; ?> </td>
         <td> <img width="auto" src="images/ <?php echo $row['image']?>" width="450" height="200" /></td>
             
          </tr>
          
        <?php
      
    }
?>
</table>
    </body>
</html>