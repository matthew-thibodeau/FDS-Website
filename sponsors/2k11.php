<?php
	set_include_path(dirname(__FILE__)."/../../");
	require_once("login/classes/authentication.php");
	$membership = new authentication();
	$membership->confirmMember();
	if (isset($_COOKIE['user']))
	{
		$user = $_COOKIE['user'];
	}
	else
	{
		header("location: /../../login/");
	}

?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>FFHS ROV</title>
		<link rel="stylesheet" href="../css/foundation.css" />
		<link rel="stylesheet" href="../css/rov.css?<?=time();?>" />
		<script src="../js/modernizr.js"></script>
	</head>
	<body>
		<div class="container">
			<nav class="top-bar" data-topbar>
				<ul class="title-area">
					<li class="name">
						<h1><a href="../index.php">First Flight ROV</a></h1>
					</li>
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>

				<section class="top-bar-section">
					<ul class="right">
						<li><a href="../index.php">Home</a></li>
						<li><a href="../about.php">About Us</a></li>
						<li class="has-dropdown active">
							<a href="#">Sponsors</a>
							<ul class="dropdown">
								<li class="active"><a href="#">2013 Sponsors</a></li>
								<li><a href="2k11.php">2011 Sponsors</a></li>
								<li><a href="2k10.php">2010 Sponsors</a></li>
							</ul>
						</li>
						<li><a href="../mate.php">The Competition</a></li>
						<li><a href="#">Donate</a></li>
					</ul>
				</section>
			</nav>
			<div class="buffer"></div>
			<br />
			<div class="row">
				<div class="small-12 medium-12 large-12 columns">
					<hr />
					<h2>2013 Sponsors</h2>
					<hr />
					<p>Our program would not be possible without the generous donations we receive from our sponsors. Below is a list of our 2013 sponsors.</p>
					<br />
				</div>
			</div>
			<div class="hide-for-small">
				<div class="row">
					<div class="small-4 medium-4 large-4 columns sponsors">
						<img src="logos/ecb.gif" alt="CDR" />
						<h3><small>East Carolina Bank</small></h3>
					</div>
					<div class="small-4 medium-4 large-4 columns sponsors">
						<a href="http://www.obxchevy.com/" target="_blank">
							<img src="logos/chevy.jpg" alt="CDR" />
							<h3><small>OBX Chevrolet Buick</small></h3>
						</a>
					</div>
					<div class="small-4 medium-4 large-4 columns sponsors">
						<a href="http://www.surfrider.org/" target="_blank">
							<img src="logos/surf.jpg" alt="CDR" />
							<h3><small>Surfrider Foundation</small></h3>
						</a>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="small-4 medium-4 large-4 columns sponsors">
						<a href="http://www.dare.k12.nc.us/" target="_blank">
							<img src="logos/dcs.jpg" alt="CDR" />
							<h3><small>Dare County Schools</small></h3>
						</a>
					</div>
					<div class="small-4 medium-4 large-4 columns sponsors">
						<a href="http://www.boldprintdesign.com/" target="_blank">
							<img src="logos/bp.jpg" alt="CDR" />
							<h3><small>Bold Print Design</small></h3>
						</a>
					</div>
					<div class="small-4 medium-4 large-4 columns sponsors">
						<a href="http://www.acehardware.com/" target="_blank">
							<img src="logos/ace.png" alt="CDR" />
							<h3><small>Ace Hardware</small></h3>
						</a>
					</div>
					<hr />
				</div>
			</div>
			<div class="show-for-small">
				<div class="row">
					<div class="small-12">
						<h2>East Carolina Bank</h2>
						<h2>OBX Chevrolet Buick</h2>
						<h2>Surfrider Foundation</h2>
						<h2>Dare County Schools</h2>
						<h2>Bold Print Design</h2>
						<h2>Ace Hardware</h2>
						<br />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="small-12 medium-12 large-12 columns">
					<ul class="no-bullet sponsors">
						<li>The Thomas Family</li>
						<li>Zach Miller</li>
						<li>Theresa Osbourne</li>
						<li>Carquest of Nags Head</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer">
			<img class="therefore" src="../img/therefore.svg" alt="therefore" />
			<h4><small>&copy;2014 Matthew Thibodeau</small></h4>
		</div>

		<script src="../js/jquery.js"></script>
		<script src="../js/foundation.min.js"></script>
		<script src="../js/foundation/foundation.topbar.js"></script>

		<script>
			$(document).foundation({
				orbit: {
					pause_on_hover: true,
					resume_on_mouseout: false,
					timer_speed: 5000
				}
			});
		</script>
	</body>
</html>