<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel= "stylesheet" href ="./assets/styles/formulaireRL.css">
	<link rel="stylesheet" href="assets/styles/navbarre.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
 
<?php include("assets/includes/navbarre.php") ?>
<a href="accueil.php" class ="Buttonretc">Acceuil</a>



<div class="formulaire">

<div class="image">
    
</div>
<div class ="description">
<div class="container">
	<section id="content">
		<form action="">
			<h1>Inscription</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="username" />
			</div>
			<div>
				<input type="email" placeholder="E-mail" required="" id="email" />
			</div>
      <div>
				<input type="phone" placeholder="Telephone" required="" id="telephone" />
			</div>
			<div>
				<input type="submit" value="S'inscrire" href="inscription1.php" />
				
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="classementBF.php">Accès au classement</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</div>
<div class="date"><p>Counter-Strike: Global Offensive (abrégé CS:GO) est un jeu de tir à la première personne mulitjoueur en ligne basé sur le jeu d'équipe développé par Valve Corporation. Il met en scène deux équipes de 5 joueurs. Les terroristes et les anti-terroristes. Les terroristes ayant pour but de placer une bombe et de la faire exploser tandis que les anti-terroriste doivent protéger les bombes sites. Dust 2, Mirage et Nuke étant bien entendu les meilleurs maps du jeu.</p>
</div>
<div class="inscri ">   
    <h2>Horraire du tournois</h2>
    <p>Tout les Vendredi à partir de 19h : Phase de pool.<br>
    Samedi à partir de 20h : Quart et Demi final<br>
    Dimanche à partir de 19h : Finale jouer en bo7</p></div>


</div>

<?php include("assets/includes/footer.php") ?>

<script src="assets/js/navbarre.js"></script>
    <script src="./assets/js/typed.min.js" type="text/javascript"></script>
    <script src="./assets/js/script.js" type="text/javascript"></script>
</body>
</html>