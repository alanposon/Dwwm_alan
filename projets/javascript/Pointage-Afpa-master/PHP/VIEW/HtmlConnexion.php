
    <div class="content">
        <form class="connect-form" action="" method="post">
            <fieldset>
                <legend>Connexion :</legend>
                <div class="contenu">
                    <label for="choix">Choix Utilisateur :</label>
                    <div class="ligne">
                    <select name="choix" id="choix">
                        <option value="formateur">Formateur</option>
                        <option value="stagiaire">Stagiaire</option>
                        <option value="at">Assistant Technique</option>
                    </select>
                   
                </div>
                </div>
                <div class="contenu">
                    <label for="matricule">Identifiant :</label>
                    <div class="ligne">
                    <input type="text" name="matricule" id="matricule" maxlength="50"  placeholder="Matricule ou Numéro bénéficiaire" required>
                    <i class="fas fa-question-circle" title="test"></i>
                </div>
            </div>
                <div class="contenu">
                    <label for="password">Mot de passe :</label>
                    <div class="ligne">
                    <input type="password" id="motDePasse" name="motDePasse"   placeholder="***********" required >
                    <i class="fas fa-question-circle" title="test"></i>
                </div>
                </div>
                <div class="centrer">
                    <input class="bouton centrer" type="submit" value="Valider" />
                </div>
            </fieldset>
        </form>
    </div>