<!DOCTYPE html>
<html>
  <head>
		<title>Lifestyle Store</title>
		<meta charset="utf-8">
		<meta name='viewport' content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>


		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.html" class="navbar-brand">Lifestyle Store</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
						<li><a href="settings.html"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
						<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>					
					</ul>
				</div>	
			</div>
		</nav>   <!--END OF HEADER-->

		<div class="container">
			<div class="row row-style">
				<div class="col-xs-offset-2 col-xs-8 col-md-offset-3 col-md-6">
					<h2>Change Password</h2>
					<div class="form-group">
						<input type="text" name="oldpassword" placeholder="Old Password" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="newpassword" placeholder="New Password" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="renewpassword" placeholder="Retype New Password" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" value="Change" class="btn btn-primary">
					</div>
				</div>
			</div>
		</div>
		

		<footer class="navbar navbar-fixed-bottom">
			<div class="container">
				<p><center>Copyright &copy; Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000.</center></p>
			</div>
		</footer>
	</body>
</html>