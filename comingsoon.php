<?php
// default values; TODO: backend implementation
$numUsers = 123;
$hasError = false;
$error = 'Please enter a valid email address below.';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Schedule Comparinator... coming soon</title>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<link rel="stylesheet" type="text/css" href="comingsoon.css">
		<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 800px)" href="comingsoon.smallscreen.css">
		<?php
		if( strstr($_SERVER['HTTP_USER_AGENT'],'Android') ||
			strstr($_SERVER['HTTP_USER_AGENT'],'webOS') ||
			strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') ||
			strstr($_SERVER['HTTP_USER_AGENT'],'iPod')) {
			// send mobile css
		?>
		<link rel="stylesheet" type="text/css" href="comingsoon.m.css">
		<?php
		}
		?>
		<link rel="stylesheet" type="text/css" href="css/google-buttons.css">
		
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		
		<!--[if gte IE 9]>
		  <style type="text/css">
			body {
			   filter: none;
			}
		  </style>
		<![endif]-->
		<!--[if lte IE 8]>
			<link rel="stylesheet" type="text/css" href="comingsoon.ie8.css">
		<![endif]-->
	</head>
	<body>
		<div id="title1" class="nosel" unselectable="on">Schedule&nbsp;&nbsp;&nbsp;&nbsp;</div>
		<div id="title2" class="nosel" unselectable="on">Comparinator</div>
		<hr id="titlesep" class="nosel" unselectable="on">
		<div id="text2012" class="nosel" unselectable="on">2&#x2009;012&nbsp;</div>
		<div id="container">
			<table id="authors"><tbody><tr><td id="yash">YASH AGGARWAL</td><td id="max">MAX CIOTTI</td><td id="xuming">XUMING ZENG</td></tr></tbody></table>
			<div id="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquet nisl sed massa sodales consequat. In id diam ante, a placerat orci. Aliquam non quam eros, quis varius orci. Curabitur malesuada vestibulum ullamcorper. Fusce condimentum libero at tellus consectetur sed commodo justo placerat. Pellentesque vel odio neque, nec cursus est. Phasellus quis condimentum purus.</div>
			<form id="signup">
				<p id="signup-text">Sign up to receive notifications when Schedule Comparinator is ready to use!</p>
				<div>
					<?php if ($hasError) { ?>
					<div id="error"><?php echo $error; ?></div>
					<?php } ?>
					<span id="email-label">Email:</span><input type="text" id="email">
					<input type="submit" id="submit" class="g-button blue" value="Remind me!"><br>
					<span id="disc">Your email will never be given away to anyone. Also, we are not evil.</span>
				</div>
			</form>
			<div class="threecol">
				<h3>WHAT IS THIS?</h3>
				<p>Schedule Comparinator 2012 is a web application designed by students for students to compare each other's schedules. Whenever a new user enters in his or her schedule, it is immediately compared with the schedules of everybody who has already entered theirs in. The service will be available for students attending Westwood High School, McNeil High School, Round Rock High School, Stony Point High School, and Cedar Ridge High School.</p>
			</div>
			<div class="threecol">
				<h3>HOW DO I BENEFIT?</h3>
				<p>By eliminating the need to post your entire schedule to Facebook and wait until everybody else posts their schedule to Facebook to compare, Schedule Comparinator 2012 frees up your precious time so that you can do other things instead of worrying about who will or will not be in your classes. In addition, since your schedule is compared to everybody else's, you will get to know more completely who will be in your classes.</p>
			</div>
			<div class="threecol">
				<h3>WHO IS MAKING IT?</h3>
				<p>We are Yash Aggarwal, Max Ciotti, and Xuming Zeng. We are students like you who have a passion for our school and our school district. We want to create applications that will make your academic life more convenient, and we are starting here with the Schedule Comparinator. [more bs here]</p>
			</div>
			<div id="footer">
				Copyright &copy; 2012 by Yash Aggarwal, Max Ciotti, and Xuming Zeng. This webpage is released under a <a href="http://creativecommons.org/licenses/by-sa/3.0/us/">Creative Commons Attribution-ShareAlike 3.0 United States</a> license.<br>
				Current number of people signed up to be notified when Schedule Comparinator 2012 is released: <?php echo $numUsers; /* there is probably a shortcut to this, but I forgot */ ?><br>
				&hearts;
			</div>
		</div>
	</body>
</html>