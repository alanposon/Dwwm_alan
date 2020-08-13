<?php


$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['idClient']))?(int) $_SESSION['idClient']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';

?>


<body>
    <header>
    <div class="header">
            <h1>Application de gestion </h1>
        </div>
    </header>