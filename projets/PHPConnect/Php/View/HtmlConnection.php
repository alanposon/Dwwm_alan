<!-- Affichage du formulaire qui permet la saisie -->
<form method="post" action="index.php?action=connect">

	<fieldset>
		<legend>Connexion</legend>
		<p>
			<label for="pseudo">Pseudo :</label>
			<input name="pseudo" type="text" id="pseudo" /><br /> 
			<label for="password">Mot de Passe :</label>
			<input type="password" name="password" id="password" />
		</p>
	</fieldset>
	<p>
		<input type="submit" value="Connexion" />
	</p>
</form>
<a href="index.php?action=nouveauUser">Pas encore inscrit ?</a>
