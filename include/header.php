<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ISYS4283 Webstore</title>

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
		<script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
	<![endif]-->

	<!-- FONT AWESOME -->
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'></link>

	<!-- UARK -->
	<link rel='stylesheet' href='/include/uark.css'></link>

</head>
<body>
<div id="header-bg"></div>
<div class="container" id="opener" role="banner">
	<a class="brand" href="http://www.uark.edu/">University of Arkansas</a>
	<span id="site-heading" class="walton-name"><a href="/">ISYS4283</a></span>
	<span class="walton-sub-name"><a href="//walton.uark.edu">The Sam M. Walton College of Business</a></span>
</div><!-- /#opener banner -->

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<!-- Top Nav Toggle -->
				<button id='n' type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a id='site_title_brand' class='navbar-brand' href='/'>ISYS4283</a>
			</div><!-- /.navbar-header -->

			<div id="navbar" class="collapse navbar-collapse">
				<ul id='top_navigation_menu' class='top_nav nav navbar-nav navigation-menu'>
				</ul>
				<div id='login_nav_div' class='top_nav navbar-right pull-right-md pull-left-xs'>
					<ul class="nav navbar-nav navigation-menu">
		  <?php
		    if (isset($_SESSION["username"])) {
				echo "<li id='logout'><a href='?logout'>Logout $_SESSION[username]</a></li>";
		    }
		    else {
				echo "<li id='login'><a href='#login'>Login</a></li>";
		    }
		  ?>
					</ul>
				</div>
			</div><!--/#navbar.nav-collapse -->
		</div><!--/.container -->
	</nav>


	<div id="wrapper">

<script>
  $(".top_nav").find("a").each(function(){
    if ( $(this).attr("href") == "<?php echo $_SERVER['SCRIPT_NAME'];?>" || $(this).attr("href") == "<?php echo dirname($_SERVER['SCRIPT_NAME'])."/";?>" )
      $(this).parent().addClass("active");
  });
</script>

		<!-- Page Content -->
		<div id="page-content-wrapper">

		<div id="page-content-container" class='container well' style='background-color:white;'>

<!-- BEGIN BODY CONTENT -->
