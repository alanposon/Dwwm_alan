<div class="content">
    <form class="connect-form" action="" method="post">
        <fieldset>
            <legend>Connexion :</legend>
            <div class="contenu">
                <label for="choix">Choix Utilisateur :</label>
                <div class="ligne">                    <select name="choix" id="choix">
                        <option value="formateur">Formateur</option>
                        <option value="stagiaire">Stagiaire</option>
                        <option value="at">Assistant Technique</option>
                    </select>

                </div>
            </div>

            <div class="contenu">
                <label for="identifiant">Identifiant :</label>
                <div class="ligne">
                    <input type="text" name="identifiant" id="identifiant" maxlength="50"
                        placeholder="Matricule" required>
                    <i class="fas fa-question-circle" title="Matricule"></i>
                </div>
            </div>

            <div class="contenu">
                <label for="password">Mot de passe :</label>
                <div class="ligne motDePasse">
                    <input type="password" id="motDePasse" name="motDePasse" placeholder="***********" required>
                    <div id="oeil"><i class="fas fa-eye"></i></div>
                    <i class="fas fa-question-circle" title="Matricule ou Numéro bénéficiaire"></i>
                </div>
            </div>

            <div class="centrer">
                <input class="bouton centrer" type="submit" value="Valider" />
            </div>
        </fieldset>
    </form>
</div>