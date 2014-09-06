<?php
	session_start();
	
	$html_start = '<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="../style.css" />
		<link rel="shortcut icon" href="../img/icon.ico">
		<title>BerengerMantoue.fr</title>
	</head>

	<body>
		 <div id="global">
			<header>
				<a href="../index.html" ><img src="../img/logo.png" alt="logo" id="Logo" /></a>
				<a href="../index.html" ><h1>berengermantoue.fr</h1></a>
				
				<nav>
					<ul>
						<li><a href="../index.html">Home</a></li>
						<li><a href="../about.html">About</a></li>
						<li><a href="../contact.html">Contact</a></li>
					</ul>
				</nav>
			</header>
			
			<section id="SendEmail">
				<div>';
				
	$html_middle = '';
	$html_end = '				</div>
			</section>
			
			<footer>
			</footer>
		</div>
	</body>
</html>	';
	
	// Le champ du code de confirmation a été rempli
	if(IsSet($_POST['captcha']) AND !Empty($_POST['captcha']))  
	{ 	
		// Si le champ est égal au code généré par l'image
		if($_POST['captcha']==$_SESSION['aleat_nbr']) 
		{
			if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) 
				&& !Empty($_POST['name']) && !Empty($_POST['email']) && !Empty($_POST['message']))
			{
				$to      = 'berenger.mantoue@gmail.com';
				$subject = 'Message from '.htmlspecialchars($_POST['name']);							 
				$message = "Pour répondre à cet utilisateur, e-mail : ".htmlspecialchars($_POST['email'])."\r\n\r\n".htmlspecialchars($_POST['message']);
			
				mail($to, $subject, $message);
			
				$html_middle = '<h2>Message sent !</h2>';
			}
			else
			{
				if(!isset($_POST['name']) || Empty($_POST['name']))
					$html_middle = '<h2>Name is not filled in.</h2>';
				if(!isset($_POST['email']) || Empty($_POST['email']))
					$html_middle = '<h2>Email is not filled in.</h2>';
				if(!isset($_POST['message']) || Empty($_POST['message']))
					$html_middle = '<h2>Message is not filled in.</h2>';
			}
		}
		else 
		{
			$html_middle = '<h2>Wrong Captcha. Try again : '.$_POST['captcha'].'</h2>';
		}
	}
	else {
		$html_middle = '<h2>Captcha is not filled in.</h2>';
	}

	echo $html_start.$html_middle.$html_end;
?>