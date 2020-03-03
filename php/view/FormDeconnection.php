<?php

session_start();
session_destroy();
$titre="Déconnexion";


echo '<p>Vous êtes à présent déconnecté</p> <br />';
echo '<p><a href="index.php">Revenir au menu</a></p>';
echo '</div></body></html>';
?>