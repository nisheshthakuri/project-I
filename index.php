
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  
  <!-- Template Custom CSS -->
  <style type="text/css">
  
	body 
	{
		padding-top: 56px;
	}

  </style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Home</a>
      <a class="navbar-brand active" href="https://www.onlyxcodes.com/2020/10/add-to-cart-and-checkout-in-php.html">Back to Tutorial</a>
	  
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
		
      </button>
		
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="btn btn-success btn-sm mt-1" href="cart.php">
                <i class="fa fa-shopping-cart"></i>
                <span class="badge badge-light" id="cart-item"></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  
  <div class="alert-message"></div>
  
  <div class="container">

    <div class="row">
		
        <div class="row">
		
		


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/c.jpg" width="400px" height="200px"></a>
			  
              <div class="card-body">
                <h4 class="card-title text-primary">C programming</h4>
                <h5>Rs.200</h5>
              </div>
			  
              <div class="card-footer">
				<form class="form-submit">
					<input type="hidden" class="pid" value="1">
					<input type="hidden" class="pname" value="bracelet">
					<input type="hidden" class="pprice" value="200">
					<input type="hidden" class="pimage" value="bracelet.png">
					<input type="hidden" class="pcode" value="p1000">
					<button id="addItem" class="btn btn-success btn-md">Add to Cart</button>
				</form>
              </div>
			  
            </div>
          </div>
		          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/scating.jpg" width="400px" height="200px"></a>
			  
              <div class="card-body">
                <h4 class="card-title text-primary">scating </h4>
                <h5>500.00/-</h5>
              </div>
			  
              <div class="card-footer">
				<form class="form-submit">
					<input type="hidden" class="pid" value="2">
					<input type="hidden" class="pname" value="scating">
					<input type="hidden" class="pprice" value="500">
					<input type="hidden" class="pimage" value="scating.jpg">
					<input type="hidden" class="pcode" value="p1001">
					<button id="addItem" class="btn btn-success btn-md">Add to Cart</button>
				</form>
              </div>
			  
            </div>
          </div>
		          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/men-fotware.jpg" width="400px" height="200px"></a>
			  
              <div class="card-body">
                <h4 class="card-title text-primary">men-fotware </h4>
                <h5>250.00/-</h5>
              </div>
			  
              <div class="card-footer">
				<form class="form-submit">
					<input type="hidden" class="pid" value="3">
					<input type="hidden" class="pname" value="men-fotware">
					<input type="hidden" class="pprice" value="250">
					<input type="hidden" class="pimage" value="men-fotware.jpg">
					<input type="hidden" class="pcode" value="p1002">
					<button id="addItem" class="btn btn-success btn-md">Add to Cart</button>
				</form>
              </div>
			  
            </div>
          </div>
		          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/sunglass.png" width="400px" height="200px"></a>
			  
              <div class="card-body">
                <h4 class="card-title text-primary">sunglass </h4>
                <h5>100.00/-</h5>
              </div>
			  
              <div class="card-footer">
				<form class="form-submit">
					<input type="hidden" class="pid" value="4">
					<input type="hidden" class="pname" value="sunglass">
					<input type="hidden" class="pprice" value="100">
					<input type="hidden" class="pimage" value="sunglass.png">
					<input type="hidden" class="pcode" value="p1003">
					<button id="addItem" class="btn btn-success btn-md">Add to Cart</button>
				</form>
              </div>
			  
            </div>
          </div>
		          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/shirt.jpg" width="400px" height="200px"></a>
			  
              <div class="card-body">
                <h4 class="card-title text-primary">shirt </h4>
                <h5>400.00/-</h5>
              </div>
			  
              <div class="card-footer">
				<form class="form-submit">
					<input type="hidden" class="pid" value="5">
					<input type="hidden" class="pname" value="shirt">
					<input type="hidden" class="pprice" value="400">
					<input type="hidden" class="pimage" value="shirt.jpg">
					<input type="hidden" class="pcode" value="p1004">
					<button id="addItem" class="btn btn-success btn-md">Add to Cart</button>
				</form>
              </div>
			  
            </div>
          </div>
		          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/women-fotware.jpg" width="400px" height="200px"></a>
			  
              <div class="card-body">
                <h4 class="card-title text-primary">women-fotware </h4>
                <h5>700.00/-</h5>
              </div>
			  
              <div class="card-footer">
				<form class="form-submit">
					<input type="hidden" class="pid" value="6">
					<input type="hidden" class="pname" value="women-fotware">
					<input type="hidden" class="pprice" value="700">
					<input type="hidden" class="pimage" value="women-fotware.jpg">
					<input type="hidden" class="pcode" value="p1005">
					<button id="addItem" class="btn btn-success btn-md">Add to Cart</button>
				</form>
              </div>
			  
            </div>
          </div>
		
        </div>
        <!-- /.row -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Onlyxcodes 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
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
