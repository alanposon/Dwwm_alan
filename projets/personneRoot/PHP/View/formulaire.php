<nav>
        <ul>
            <li><a href="refresh:3;url=index.php?action=confirmation" title="debut">debut</a></li>
            <li><a href="index.php?action=accueil"title="formulae">retour</a></li>
            <li><a href="" title="formulae">Contact</a></li>
        </ul>
    </nav>
    <img src="img/photo.jpg" alt="l'image ne t'es pas destinée">


    
    <form action ="index.php?action=resultat" method="POST">
     


        <div class="recherche">
            <fieldset>
                <legend>Recherche :</legend>
                <label for="recherche"> Rechercher:</label>
                <input type="text" name="recherche"> <input type="submit" value="recherche">
            </fieldset>
        </div>

        <br>
        <fieldset>
            <div class="coordonnee">
                <legend> Vos coordonnées</legend>
                <div class="titre">
                   
                        <label for="nom">votre nom </label>
                        <label for="prenom"> votre Prenom </label>
                        <label for="naissance">votre date de naissance </label>
                        <label for="adrs">votre adresse</label>
                        <label for="ville">votre ville</label>
                        <label for="postal">votre code postal</label>
                        <label for="mail">votre e-mail</label>

                </div>
                <div class="case">
                    <input type="text" name="nom" size="50" maxlength="50" required>
                    <input type="text" name="prenom" size="50" maxlength="50" required>
                    <input type="text" name="date_de_naissance" size="50" maxlength="50" required>
                    <input type="text" name="adresse" size="50" maxlength="50" required>
                    <input type="text" name="ville" size="50" maxlength="50" required>
                    <input type="text" name="code_postal" size="50" maxlength="50" required>
                    <input type="text" name="e_mail" size="50" maxlength="50" required>
                </div>
                 
            </div>
      
        </fieldset>

        <br>
        <fieldset>
            <legend> Statut:</legend>

            <div class="statut">
                <input type="radio" name="homme" size="50" maxlength="50" value="particulier">
                vous êtes un homme
                <input type="radio" name="femme" size="50" maxlength="50" value="professionnel">
                vous êtes une femme

            </div>
        </fieldset>
        <br>
        <fieldset>
            <legend> Photo Profil :</legend>
            <div class="photo">
                <label for="photo">Inserez photo de profil :</label>
                <input type="file" name="photo">
            </div>
        </fieldset>
        <br>


        <div class="profil">

            <select name="metier">
                <option value="devellopeur">devellopeur</option>
                <option value="chomeur">chomeur</option>
                <option value="autre" selected>autre</option>
            </select>
            Si vous avez repondu autre précisez
            <input type="text" name="autre" size="50" maxlength="50">

        </div>

        <br>

        <div class="argent">
            <label for="argent"></label>
            <select name="argent">
                <option value="&lsaquo;1000 "> &lsaquo;1000 </option>
                <option value="&rsaquo;2000 ">&lsaquo;2000 </option>
                <option value="autre" selected>autre</option>
            </select>
            en quelle année avez-vous suivi le stage afpa ?
            <input type="text" name="stage" size="50" maxlength="50">
        </div>

        <br>
        <div class="commentaire">
            <textarea name="vos commentaire" rows="5" cols="30" placeholder="vos commentaires"></textarea>
        </div>
        <h2> merci d'avoir répondu au questionnaire l'entreprise tartempion vous remercie </h2>

        <input TYPE="submit" NAME="valide" VALUE=" valide ">
        <input TYPE="reset" NAME="annuler" VALUE=" Annuler ">
    </form>










    <h1>Accueil </h1>

    <article>
        <hr>
        <h3>Le test </h3>




        <article>


            <hr>
            <h3>L'entreprise</h3>
            <p>Notre entreprise familliale met tout son savoir-faire a votre disposition dans le domaine de la renovation immobiliere <br><br> créée il y a plus de 70 ans, notre entreprise intervient pour les constructions neuves ou en rénovation
                <br><br>Implantés à Amiens, nous intervenons dans tout le departement de la Somme </p>
        </article>



        <article>
            <h3>Qualité</h3>
            <p>Nous mettons à votre disposition un service personnalis", avec 1 seul interlocuteur durant tout votre projet.<br><br> Vous serez séduit par notre expertise, nos compétences et notre sérieux dans les travaux. </p>
        </article>



        <article>
            <h3>Devis gratuit</h3>
            <div class="pari">
                <p>Vous pouvez bien sur contacter pour de plus amples informations ou pour une demande d"intervention? </p>

                <p> steve est decédé le 28 juin 2019 a 14 heures , ecraser par un alpaga nomé billy </p>
            </div>
        </article>

        <hr>