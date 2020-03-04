<?php

session_destroy();
$titre="Déconnexion";


echo '<p>Vous êtes à présent déconnecté</p> <br />';
echo '<p><a href="index.php">Revenir au menu</a></p>';
header("refresh:5,url=index.php?action=connect");
echo '</div></body></html>';
?>