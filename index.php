<?php
	session_start();
	ob_start();
	require_once("controleur/config_bdd.php");
	require_once("controleur/controleur.class.php");
	$unControleur = new Controleur($serveur,$bdd,$user,$mdp);
?>
		


        <?php
				if (isset($_GET['page']))
					$page = $_GET['page'];
				else
					$page = 0;

				switch ($page) {
					case 1 : require_once("vue_inscription_client.php"); break;
					case 2 : require_once("vue_connexion_client.php"); break;
					case 3 : require_once("gestion_reservation.php.php"); break;
					case 4 : unset($_SESSION);
					 session_destroy();
					 header("Location: index.php");
					 break;
					case 0 : require_once("home.php"); break;
					default : require_once("erreur.php"); break;
				}
			
		?>
