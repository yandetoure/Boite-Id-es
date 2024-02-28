<?php
require_once(__DIR__. '/functions.php');
include ('server.php' );
?>

	<!--
   	Si utilisateur/trice est non identifié(e), on affiche le formulaire
	-->
<?php 

if (!isset($loggedUser)) : ?>
	<form action="accueil.php" method="POST">
    	<!-- si message d'erreur on l'affiche -->
    	<?php if (isset($errorMessage)) : ?>
        	<div class="alert alert-danger" role="alert">
            	<?php echo $errorMessage; ?>
        	</div>
    	<?php endif; ?>
    	<div class="mb-3">
        	<label for="email" class="form-label">Email</label>
        	<input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
        	<div id="email-help" class="form-text">L'email utilisé lors de la création de compte.</div>
    	</div>
    	<div class="mb-3">
        	<label for="password" class="form-label">Mot de passe</label>
        	<input type="password" class="form-control" id="password" name="password">
    	</div>
    	<button type="submit" class="btn btn-primary">Envoyer</button>
	</form>
	<!-- Si utilisateur/trice bien connectée on affiche un message de succès -->
<?php else : ?>
	<div class="alert alert-success" role="alert">
    	Bonjour <?php echo $loggedUser['email']; ?> et bienvenue sur le site !
	</div>
<?php endif; ?>