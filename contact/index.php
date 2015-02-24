<!-- Some HTML Bureaucracy... --> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!-- ------------------------ -->

<!-- Head -->
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" media="screen" href="./css/screen.css" />
	<title>Home | WikIIT</title> <!-- This will need to change for every page -->

</head>

<body>
<!-- ---- -->

<!-- Header  -->
<div id="header">
<div id="logo">
<a href="./index.html"><img src="./images/logo1.png"/></a>
</div>


<!-- Nav Bar -->
<div id="nav">
<ul>
	<li><a href="./index.html">Home</a></li> <!-- replace the # with a URL -->
	<li><a href="./about.html">About Us</a></li>
	<li><a href="./projects.html">Projects</a></li>
	<li><a href="./news.html">News</a></li>
	<li><a href="./contact.html">Contact Us</a></li>
	<li><a href="http://www.iit.edu">IIT Homepage</a></li>
</ul>
</div>
<!-- /Nav Bar -->
</div>
<!-- /Header -->


<!-- Content wrapper -->
<div id="content-wrapper">

	<div id="social">
		<ul>
			<li><a href="#"><img src="./images/social/facebook42.png"/></a></li>
			<li><a href="#"><img src="./images/social/twitter42.png"/></a></li>
			<li><a href="#"><img src="./images/social/instagram42.png"/></a></li>
			<li><a href="#"><img src="./images/social/flickr42.png"/></a></li>
			<li><a href="#"><img src="./images/social/youtube42.png"/></a></li>
			<li><a href="#"><img src="./images/social/google-plus42.png"/></a></li>
		</ul>
	</div>
	
	<div id="text-wrapper">
		<h1>Contact Us</h1>
		<p>To find out more about any of the projects or to reach us with any other questions, 
		please fill out the form below</p>
		
		<?php
    		$name = $_POST['name'];
    		$email = $_POST['email'];
    		$message = $_POST['message'];
    		$from = 'From: TangledDemo'; 
    		$to = 'contact@tangledindesign.com'; 
    		$subject = 'Hello';
    		$human = $_POST['human'];
			
    		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
    		
    		if ($_POST['submit']) {
    			if ($name != '' && $email != '') {
        			if ($human == '4') {				 
            			if (mail ($to, $subject, $body, $from)) { 
	        				echo '<p>Your message has been sent!</p>';
	    				} else { 
	        				echo '<p>Something went wrong, go back and try again!</p>'; 
	    				} 
					} else if ($_POST['submit'] && $human != '4') {
	    				echo '<p>You answered the anti-spam question incorrectly!</p>';
					}
    			} else {
        			echo '<p>You need to fill in all required fields!!</p>';
    			}
			}
		?>
    
    
		<form method="post" action="./index.php">
			<label>Your name</label>
			<input name="name" placeholder="Type Here">
			<label>Email</label>
    		<input name="email" type="email" placeholder="Type Here">
    		<label>Message</label>
    		<textarea name="message" placeholder="Type Here"></textarea>
    		<input id="submit" name="submit" type="submit" value="Submit"/>
    	</form>
	</div>
</div>

</body>
</html>