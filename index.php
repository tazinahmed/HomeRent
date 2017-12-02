
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>home rent</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--FlexSlider-->
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
<!--End-slider-script-->
<!-- //js -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>	
<body>

<!-- banner -->
	<div class="banner">
			<!-- header -->
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-5" id="cl-effect-5">
						<ul class="nav navbar-nav">
						<h1><a href="index.php">HOME RENT</a></h1>
							<li><li>
							
								<ul class="nav navbar-nav navbar-right">
        							<li class="dropdown">
          							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SignUp <span class="caret"></span></a>
          					<ul class="dropdown-menu">
            					<li><a href="ownerform.php">Owner</a></li>
            					<li><a href="renter_reg.php">Renter</a></li>
          					</ul>
								</li>
								<li class="dropdown">
          							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signin <span class="caret"></span></a>
          					<ul class="dropdown-menu">
            					<li><a href="login.php">Owner</a></li>
            					<li><a href="renterlogin.php">Renter</a></li>
          					</ul>
								</li>
				</div>
			</nav>	
			<div class="w3_navigation_pos">
			</div>
		</div>
	</div>
<!-- //header -->
		<div class="banner-info">
			<div class="container">
				<div class="flexslider-info">
						<section class="slider">
							<div class="flexslider">
								<ul class="slides">
									<li>
									<div class="w3l-info">
										<h3> <br>Some people look for a beautiful place.</br></h3>
									</div>
									</li>
									<li>
									<div class="w3l-info">
										<h3> <br>Others make the place beautiful.</br></h3>
									</div>
									</li>
									<li>
									<div class="w3l-info">
										<h3><br>Start your journey here...</br></h3>
									</div>
									</li>
								</ul>
							</div>
						</section>
					</div>
					<div class="wthree-ban">
						<div class="w3l-social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
						<div class="agileinfo-news-button">
							<a href="#" class="hvr-shutter-in-horizontal" data-toggle="modal" data-target="#myModal"> Read More</a>
						</div>
						<div class="clearfix"></div>
					</div>
			</div>
		</div>
	</div>
<!-- //banner -->


	
	<!-- footer -->
	<div class="agile-footer">
		<div class="container">
			<div class="aglie-info-logo">
				<h2><a href="index.php">HOME</a></h2>
			</div>
			
			<div class="w3layouts_mail_grid">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Mail Us</h3>
						<a href="mailto:ahmedtazin14@gmail.com">ahmedtazin14@gmail.com</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="copy-right">
				<p>© EAST WEST UNIVERSITY. All rights reserved </p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- modal -->
				<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header"> 
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								<h4 class="modal-title">HOME RENT</h4>
							</div> 
							<div class="modal-body">
								<div class="agileits-w3layouts-info">
									<img src="images/image.png" class="img-responsive" alt="" />
									<p>This web application will be helpful for both the renters and the owners. The renters can pay their rent through this application and the owners can collect them. The owners can also pay his bills through this application and can keep a track about the rent.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //modal -->  

<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>