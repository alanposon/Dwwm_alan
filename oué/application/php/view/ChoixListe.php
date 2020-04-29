<h3>Que souhaite tu faire ?</h3>
<?php
    if ($lvl != 1)
    echo '<div class="contenue">
        <a href="index.php?action=ClientListe">
            <div class="choix-liste-main">
                <div class="choix-liste">
                    Liste des clients
                </div>
        </a>
        <a href="index.php?action=VilleListe">
            <div class="choix-liste-2">
                Liste des villes
            </div>
        </a>';
        if ($lvl >= 3){
        echo '<a href="index.php?action=UserListe">
            <div class="choix-liste-3">
                Liste des utilisateurs
            </div>
        </a>';
        }
    elseif($lvl == 1){
            header("refresh:2,url=index.php?action=ClientListe");
        }
        ?>
    </div>
    <div class="contenue-deconnect">
        <a href="index.php?action=deconnect">
            <div class="deconnect">Deconnexion</div>
        </a>
    </div>
