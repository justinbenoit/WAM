<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    
    <title>WAM CONTACT US</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="icon" href="favicon.ico?v=2" type="image/x-icon" />
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-42022902-1', 'wanganesthesiamanagement.com');
	  ga('send', 'pageview');

	</script>
	
 	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--<script src="js/jquery-1.11.3.min.js"></script>-->

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
	<script src="js/main.js"></script>
	<script src="js/validateForm.js"></script>
<main>
  <header>
	    <div class="header-top"> <a href="index.html" target="_self"><img src="images/WAM_Logo.png" id="logo"></a> <img src="images/menu-button-160x130.png" id="menu-open" class="menu-button"> <img src="images/menu-button-close-160x130.png" id="menu-close" class="menu-button"> </div>
	    <div id="titlebar"> <img src="images/WAM_titlebar_text.png" id="titlebar-text" /> </div>
	    <menu>
	      <ul id="main-nav">
	        <a href="index.html" id="nav-homepage">
	          <li>HOMEPAGE</li>
            </a> <a href="about.html" id="nav-about">
			<li>ABOUT US</li>
			</a> <a href="services.html" id="nav-services">
		    <li>OUR SERVICES</li></a>
		    <a href="providers.html" id="nav-providers">
			<li>OUR PROVIDERS</li></a>
		    <a href="vision.html" id="nav-vision">
			  <li>VISION STATEMENT</li>
			  </a>
	        <li class="selected">CONTACT US</li>
          </ul>
        </menu>
  </header>
		<div class="content">
			<!--<form action="action_page.php">-->
			<h1>MESSAGE SENT</h1>
			<?php
		if(isset($_POST['email'])) {

			// EDIT THE 2 LINES BELOW AS REQUIRED
			$email_to = "wang.anesthesia.management@gmail.com";
			$email_subject = "Message from WAM Website: ".$_POST['reason'];
			
			/*function died($error) {
				// your error code can go here
				echo "We are very sorry, but there were error(s) found with the form you submitted. ";
				echo "These errors appear below.<br /><br />";
				echo $error."<br /><br />";
				echo "Please go back and fix these errors.<br /><br />";
				die();
			}


			// validation expected data exists
			if(!isset($_POST['first_name']) ||
				!isset($_POST['last_name']) ||
				!isset($_POST['email']) ||
				!isset($_POST['telephone']) ||
				!isset($_POST['comments'])) {
				died('We are sorry, but there appears to be a problem with the form you submitted.');       
			}*/



			$name = $_POST['name']; // required
			$email_from = $_POST['email']; // required
			$phone = $_POST['phone']; // not required
			$message = $_POST['message']; // required

			/*$error_message = "";
			$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

			  if(!preg_match($email_exp,$email_from)) {
				$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
			  }

			$string_exp = "/^[A-Za-z .'-]+$/";

		  if(!preg_match($string_exp,$first_name)) {
			$error_message .= 'The First Name you entered does not appear to be valid.<br />';
		  }

		  if(!preg_match($string_exp,$last_name)) {
			$error_message .= 'The Last Name you entered does not appear to be valid.<br />';
		  }

		  if(strlen($comments) < 2) {
			$error_message .= 'The Comments you entered do not appear to be valid.<br />';
		  }

		  if(strlen($error_message) > 0) {
			died($error_message);
		  }*/

			//$email_message = "Form details below.\n\n";


			function clean_string($string) {
			  $bad = array("content-type","bcc:","to:","cc:","href");
			  return str_replace($bad,"",$string);
			}



			$email_message .= "Name: ".clean_string($name)."\n\n";
			$email_message .= "Email: ".clean_string($email_from)."\n\n";
			$email_message .= "Phone: ".clean_string($phone)."\n\n";
			$email_message .= clean_string($message)."\n";

		// create email headers
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);  
		?>

		<!-- include your own success html here -->
		<p>
			Thank you for contacting Wang Anesthesia Management.<br/><br/>
			We will respond to you very soon.<br/><br/>
			You can also reach us by phone at: 310-795-8503<br/><br/>
			or by email at: wang.anesthesia.management@gmail.com
		</p>
		<?php

		}
		?>
				
		</div>
	</main>
  </body>
</html>