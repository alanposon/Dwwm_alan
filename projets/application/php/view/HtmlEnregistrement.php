<h1>Ajout User</h1>
    <div class="form">
        <form method="post" action="index.php?action=nouveauUser">
        <div class="center-form">
            <label for="pseudo">Pseudo : </label>
            <div class="espace-3"></div>
            <label for="mdp">Password: </label>
            <div class="espace-3"></div>
            <label for="confirm">Confirm :</label>
        </div>
        <div class="center-form-2">
            <input name="pseudo" type="text" id="pseudo" />
            <div class="espace-2"></div>
            <input name="mdp" type="password" id="mdp" />
            <div class="espace-2"></div>
            <input name="confirm" type="password" id="confirm" />
        </div>
    </div>   
        <div class="center-form-connexion">
            <input type="submit" value="Ajouter" />
            <div class="espace"></div>
            <a href="annuler">Annuler</a>
            <div class="espace"></div>
        </div>
        </form>  