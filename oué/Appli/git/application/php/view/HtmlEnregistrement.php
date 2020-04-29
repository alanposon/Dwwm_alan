<h1>Inscription</h1>

<form method="post"
	action="index.php?action=nouveauUser"
	enctype="multipart/form-data">
	<fieldset>
		<legend>Identifiants</legend>
		<label for="pseudo">* Pseudo : </label> 
		<input name="pseudo" type="text" id="pseudo" /> (le pseudo doit contenir entre 3 et 15 caractères)<br /> 
		<label for="mdp">* Mot de Passe : </label> 
		<input type="password" name="mdp" id="mdp" /><br /> 
		<label for="confirm">* Confirmer le mot de passe : </label> 
		<input type="password" name="confirm" id="confirm" />
	</fieldset>
		<p>Les champs précédés d'un * sont obligatoires</p>
		<p>
			<input type="submit" value="S'inscrire" />
		</p>

</form>
