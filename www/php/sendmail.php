<!DOCTYPE html> 						<!-- Indique qu'on fait une page en html5-->
<html> 									<!-- Veut dire qu'ici, on parle html. -->
	<head> 								<!-- Entête de la page (partie technique) -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  <!-- Encodage -->
		<link rel="stylesheet" href="../style.css" /> <!-- Chemin vers le fichier css -->
		<link rel="shortcut icon" href="../img/icon.ico"> <!-- Icone de l'onglet -->
		<title>BerengerMantoue.fr</title> 		<!-- Titre pour onglet et google -->
	</head>

	<body> <!-- C'est là que ça se passe ... -->		
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
				<div>
					<?php
						//if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) )
						//{
						//	$to      = 'berenger.mantoue@gmail.com';
						//	$subject = 'Message from '.htmlspecialchars($_POST['name']);							 
						//	$message = "Pour répondre à cet utilisateur, e-mail : ".htmlspecialchars($_POST['email'])."\r\n\r\n".htmlspecialchars($_POST['message']);
                        //
						//	mail($to, $subject, $message);
                        //
						//	echo '<h2>Message sent !</h2>';
						//}
						//else
						//{
						//	if(!isset($_POST['name']) )
						//		echo '<h2>Name is not filled in.</h2>';
						//	if(!isset($_POST['email']) )
						//		echo '<h2>Email is not filled in.</h2>';
						//	if(!isset($_POST['message']) )
						//		echo '<h2>Message is not filled in.</h2>';
						//}
					?>
					<h2>Told you it didn't work ...</h2>
				</div>
			</section>
			
			<footer>
			</footer>
		</div>
	</body>
</html>	