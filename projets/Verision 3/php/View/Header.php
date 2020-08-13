<?php


$lvl = (isset($_SESSION['level'])) ? (int) $_SESSION['level'] : 1;
$id = (isset($_SESSION['...'])) ? (int) $_SESSION['...'] : 0;
$pseudo = (isset($_SESSION['identifiant'])) ? $_SESSION['identifiant'] : '';

?>


<body>
    <header>
        <div class="header">
            <h1>Application de Caisse Enregistreuse </h1>
        </div>
    </header>