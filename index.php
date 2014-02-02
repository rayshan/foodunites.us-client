<!DOCTYPE html>
<html ng-app="FuApp">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta charset="utf-8">

	<title>foodunites.us</title>
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="bower_components/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="css/app.css">
</head>

<body ng-controller="FuAppCtrl as app">

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">FoodUnites</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">
					<div class="fu-nav-icon"><i class="fa fa-home"></i></div> Home</a>
				</li>
				<li>
					<a href="#">
						<span class="badge pull-right">3</span>
						<div class="fu-nav-icon"><i class="fa fa-user"></i></div> Profile
					</a>
				</li>
				<li>
					<a href="#">
						<div class="fu-nav-icon"><i class="fa fa-upload"></i></div> Upload
					</a>
				</li>
				<li>
					<a href="#">
						<div class="fu-nav-icon"><i class="fa fa-question"></i></div> About
					</a>
				</li>
			</ul>
			<form class="navbar-form navbar-left">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-search"></i></span>
						<input type="text" class="form-control" placeholder="Find your favorite food">
					</div>
				</div>
			</form>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<section class="col-xs-12">
	<p>Share your favorite food with the people that you love with FoodUnites.</p>

	<div>
		<button type="button" class="btn btn-primary btn-block"><i class="fa fa-camera"></i> Sharing your fav!</button>
	</div>

	<div class="fu-dual-img-box">
		<div class="well well-sm">
			<i class="fa fa-heart"></i> <span class="label label-primary">Shawarma</span> is an awesome regional food item.
		</div>

		<div class="left">
			<div class="img">
				<img src="http://placeimg.com/400/400/any" class="img-thumbnail" alt=""/>
			</div>

			<div class="fu-profile">
				<div class="fu-profile-img pull-left">
					<img src="img/yara.jpg" class="img-circle" alt=""/>
				</div>
				<div class="fu-profile-other">
					<span>Yara</span>
					<br/>
					<span>Pakistan</span>
					<span class="flag-icon flag-icon-pk flag-icon-squared"></span>
				</div>
			</div>
		</div>

		<div class="right">
			<div class="img">
				<img src="http://placeimg.com/400/400/any" class="img-thumbnail" alt=""/>
			</div>

			<div class="fu-profile">
				<div class="fu-profile-img pull-right">
					<img src="img/rahul.jpg" class="img-circle" alt=""/>
				</div>
				<div class="fu-profile-other">
					<span>Rahul</span>
					<br/>
					<span class="flag-icon flag-icon-in flag-icon-squared"></span>
					<span>India</span>
				</div>
			</div>
		</div>

		<div class="fu-distance text-center">
			<small>••• 2,163 km •••</small>
			<img src="img/map.png" class="fu-map" alt=""/>
		</div>

	</div>

</section>

<!--vendor-->
<script src="bower_components/angular/angular.js"></script>
<script src="bower_components/angular-animate/angular-animate.js"></script>
<script src="bower_components/angular-route/angular-route.js"></script>

<script src="bower_components/jquery/jquery.js"></script>
<script src="bower_components/bootstrap/js/collapse.js"></script>

<!--app-->
<script src="js/app.js"></script>

</body>
</html>