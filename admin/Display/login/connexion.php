<?php 

session_start();

?>

<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
    <header class="header">
		<nav class="menu">
			<a href="https://www.je-code.com/esgi1/jderache/mosaique/admin">Retour vers la page admin</a>
		</nav>
	</header>   
        <div id="container">
            <form method="POST" action="login.php" class="formConnexion">
                <h1>Connexion</h1>  
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Nom d'utilisateur" name="username" value="<?php echo $_GET['user'] ?>">

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Mot de passe" name="password" >

                <input class="login" type="submit" name='submit' value='LOGIN'>
            </form>
        </div>
    <footer class="footer">
		<nav class="menu">
			<a href="https://www.je-code.com/esgi1/jderache/mosaique/contact.php">Nous contacter</a>
		</nav>
	</footer>    
    </body>
</html>
