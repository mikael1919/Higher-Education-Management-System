<?php
if(session_id() == '' || !isset($_SESSION))
	{
		session_start();
	}

?>

<!DOCTYPE HTML>
<html lang="en" style="font-size: 100%;">
	<head>
		<title>Clothing Shop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="icon" href="images/logob.ico" />
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/style2.css"/>
		<link rel="stylesheet" href="css/style3.css"/>
	</head>
	<style>
		html {
  scroll-behavior: smooth;
}
	</style>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				
				<div><a class="logo" href="index.php"><img src="images/logob.png" height="44px" width="60px" class="img-fluid"></a></div>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index">Home</a></li>

                  	<li><a href="products">Products</a></li>
                  	<li><a href="cart">View Cart</a></li>
                  	<li><a href="orders">My Orders</a></li>
                  	<li><a href="#contact">Contact</a></li>

                  <?php
                    if(isset($_SESSION['username'])){
                      echo '<li><a href="account">My Account</a></li>';
                      echo '<li><a href="logout">Log Out</a></li>';
                    }
                    else{
                      echo '<li><a href="login">Log In</a></li>';
                      echo '<li><a href="register">Register</a></li>';
                    }
                  ?>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner" style="background-image:url('images/wallE.jpeg')">
				<div class="inner">
					<h1>Welcome to our Clothing Store!</h1>
					<a href="admin">&nbsp;<img src="images/logob.png" height="250px" width="250px" style="opacity: 50%"></a>
				</div>
			</section>
			<section id = "notdecided">
				<div class = "inner">
					<div class="wrapper">
			            <h1>Featured Collection</h1>  
			    </div>

			    <div class = "row">
			    	<div class = "col-md-12">
			    		<?php
			    			                
					                
				
						?>

			    	</div>
			    </div>
			</div>
			<br>
			<br>
		</section>
		<hr>
		<section id="contact">
			<div class = "inner" style="background-color: #f0f0f0;padding: 20px;">
				<div class = "wrapper">
					<h1>Contact Us</h1>
				</div>
				<form method="POST" id="login" action="#">
			      <div class="form-group">
			        <label for="email" class="right inline">Email</label>
			        <input type="email" id="email" type="form-control" placeholder="kranika@gmail.com" name="username" required>
			      </div>

			      <div class="form-group">
			        <label for="Subject" class="right inline">Subject</label>
			        <textarea  id="Subject" name="Subject" rows=5 required></textarea>
			      </div>

			      <br>
			      <input type="submit" style="width: 100px;" value="Send"/>
			      <input type="reset" style="width: 100px;" value="Reset" />
			    </form>
			</div>
		</section>


	<!-- Footer -->
	<footer id="footer">
        <div class="inner">
          <!-- <div class="content"> -->
            
            <section>
            <div class="row">
            	<div class="col-md-3">
            	</div>
            	<div class="col-md-6">
              <h4>Follow us:</h4>
              
              <ul class="plain">
                <li style="display:inline"><a href="#"><i class="icon fa-twitter"></i>Twitter&nbsp;&nbsp;</a></li>
                <li style="display:inline"><a href="#"><i class="icon fa-facebook"></i>Facebook&nbsp;&nbsp;</a></li>
                <li style="display:inline"><a href="#"><i class="icon fa-instagram"></i>Instagram&nbsp;&nbsp;</a></li>
              </ul>
          </div>
          <div class="col-md-3">
          	<a href="index.php"><img src="images/logob.png" height="200px" width="200px"></a>
          <!-- </div> -->
          </div>
            </section>
          </div>
          <div class="copyright">
            &copy; <a href="">140402 Charles Davies</a>.
          </div>
        </div>
      </footer>


			<style>
		        #login {
		            margin-left:200px;
		            margin-right:200px;
		        }
		         #login label{
		            margin-right:5px;
		        }
		         #login input {
		            padding:5px 5px;
		            border:1px solid #d5d9da;
		            box-shadow: 0 0 5px #e8e9eb inset;
		            
		            font-size:1em;
		            outline:0;
		        }
		        }
		      </style>

	</body>
</html>






































































































































































































































































 <script src="images/js/jquery.min.js"></script>
      <script src="images/js/browser.min.js"></script>
      <script src="images/js/breakpoints.min.js"></script>
      <script src="images/js/util.js"></script>
      <script src="images/js/main.js"></script>

