﻿<?php
session_destroy();
echo '<div class="messageDeco">Vous êtes à présent déconnecté </div>';
header("refresh:3,url=index.php?action=accueil");
?>