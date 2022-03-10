<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <link rel="shortcut icon" href="../img/logo.ico" type="text/cgoaccueil.ico" type="image/x-icon" >
		<link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body style="background: #CCC;">
<!-- menu -->
<nav class="header-menu">
	<ul>
		<li class="Index-html"><a href="Index.html"> Accueil</a></li>
		<li class="Clinique-html"><a href="Clinique vétérinaire.html"> Clinique vétérinaire</a></li>
		<li class="Info-html"><a href="Informations.html"> Informations</a></li>
		<li class="Contact-html"><a href="Contact.html"> Contact</a></li>
	</ul>
</nav>

<div class="container">
	<div class="row">
		<div class="col-lg-6 m-auto">
			<div class="card bg-dark mt-5">
				<div class="card-title bg-primary text-white">
					<h3 class="text-center py-3">login</h3>
				</div>

				<?php
					if (@$_GET['Empty']==true);
					{
				?>
					<div class="alert-light text-danger text-center py-3"><?php echo "Compléter chaques cases"?></div>
				<?php
					}
				?>
				<?php
					if (@$_GET['Invalide']==true)
					{
				?>
					<div class="alert-light text-danger text-center py-3"><?php echo "erreur"?>
						
					</div>
				<?php
					}
				?>
				<div class="card-body">
					<form action="process.php" method="POST">
						<input type="text" name="mail" placeholder="mail admin" class="form-control mb-3">
						<input type="password" name="mdp" placeholder="Mot de passe" class="form-control mb-3">
                                                <button class="btn btn-success mt-3" name="login">Se connecter</button>
					</form>
				</div>
			</div><br>
		</div><br>
	</div><br>
</div>
</body>
</html>