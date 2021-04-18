<?php	

	//Se connecter à la base de données

	$db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8','exmachinefmci', 'carp310M');

	// Sélectionner depuis la table listingESGI les noms prenoms et id
	$pdoStat = $db->prepare('SELECT * FROM listingEsgiGroupe1');

	$executeIsOk = $pdoStat->execute();

	$etudiants = $pdoStat->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bêtas testeurs</title>
<!-- CSS -->
<style>
  body {
    display: grid;
    background-color: #130025;
    font-family: RedHatDisplay;
  }
  @font-face {
    font-family: RedHatDisplay;
    src: url(font/RedHatDisplay-Black.ttf);
  }
  @font-face {
    font-family: Lexend;
    src: url(font/Lexend-Thin.ttf);
  }
  .header {
    position: fixed;
    left: 0;
    right: 0;
    height: 80px;
    line-height: 80px;
    background-color: #222222;
  }
  .footer {
    position: fixed;
    bottom: 0;
    height: 50px;
    line-height: 50px;
    background-color: #222222;
  }
  .menu {
    padding: 0 10px;
    text-align: center;
  }
  .menu a{
    font-family: Lexend;
    font-weight: bold;
    text-decoration: none;
    text-transform: uppercase;
	list-style: none;
    padding: 0 10px;
    color: #FFF;
    transition: all 0.1s ease 0.2s;
  }
  .menu a:hover {
    color: #62bcda;
    -webkit-transition: color 1s;
    transition: color 1s;
  }
  h1 {
    font-size: 150px;
    line-height: 1;
    font-weight: bold;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-align: center;
    color: #FFF;
  }
  .liste li {
    font-size: 200%;
    font-family: Lexend;
    font-weight: bold;
    text-transform: uppercase;
    text-decoration: none;
	list-style: none;
    padding: 0 10px;
    color: #FFF;
    transition: all 0.1s ease 0.2s;
  }
  .liste li:hover {
    color: #62bcda;
    -webkit-transition: color 1s;
    transition: color 1s;
  }
</style>
</head>

<body>
	<!-- Navigation -->
	<header class="header">
		<nav class="menu">
			<a href="https://www.je-code.com/esgi1/jderache/mosaique">Retour vers l'Accueil</a>
		</nav>
	</header><!-- Titre -->
	<h1><span>Qui êtes vous ?</span></h1>
	
	<!-- Liste des étudiants -->
	<center>
		<table class="liste">
			<tr>
				<td>
					<ul>
				<?php foreach ($etudiants as $etudiant): ?>
				<li>
				<?= $etudiant['prenom'] ?> <?= $etudiant['nom'] ?>
				</li>
				<?php endforeach; ?>
					</ul>
				</td>
			</tr>
		</table>
	</center>
	
	<br>
	<br>
	
	<footer class="footer">
		<nav class="menu">
			<a href="https://www.je-code.com/esgi1/jderache/mosaique/contact.php">Nous contacter</a>
		</nav>
	</footer>
</body>
</html>