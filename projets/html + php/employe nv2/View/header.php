<header>

<header>
        <div class="logo">
            <img src="img/LOGO.png" alt="">
        </div>
        <div class="titre">
        <?php if ($niveau=="liste") echo '
            <h1><span>G</span>estion des Employés</h1>
            <h2> Liste</h2>';
            else{
                echo '
            <h1><span>G</span>estion des Employés</h1>
            <h2> Détail</h2>';
            }?>
        </div>
        <div class="espace"></div>
    </header>