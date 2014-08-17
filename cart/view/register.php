
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sign Up</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/foundation.min.css" />
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="../style.css" rel="stylesheet">
	
</head>
<body>
    
	<div class="contain-to-grid header-section">
		<nav class="top-bar important-class" data-topbar>
			<ul class="title-area">
				<li class="name">
					<img src="../img/logo.png" width="100" height="100" alt="" id="logo-img" />
				</li>
				<li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
			</ul>
			<section class="top-bar-section">
				<ul class="right">
					<li class="active"><a href="index.php">Home</a></li>
		            <li><a href="#about">About us</a></li>
		            <li><a href="#portfolio">Portfolio</a></li>
		            <li>
		                <a href="#services">Services</a>
		            </li>
            		<li><a href="#contact">Contact</a></li>
            	</ul>
            </section>
		</nav>
	</div>
	<div class="row content-section">
		<div class="clearfix" id="content" >
			<h1>Sign Up </h1>
			<form action="." method="post">
				<label>First Name: </label>
				<input type="text" name="first_name" value="<?php echo htmlspecialchars($first_name); ?>">

				<?php echo $fields->getField('first_name')->getHTML(); ?>
				<br />
				<label>Last Name: </label>
				<input type="text" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>">
				<?php echo $fields->getField('last_name')->getHTML(); ?>
				<br />
				<label>Phone: </label>
				<input type="text" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
				<?php echo $fields->getField('phone')->getHTML(); ?>
				<label>Email: </label>
				<input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
				<?php echo $fields->getField('email')->getHTML(); ?>
				<br />

				<input type="submit" value="Sign Up" name="action">
				<input type="submit" value="Reset" name="action" >
				<br />
			</form>
		</div>
	</div>
<div class="footer-section">
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<p> &copy; Copyright 2014</p>
			</div>
		</div>
</div>
	<script src="../js/vendor/modernizr.js"></script>
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/main.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>
