<?php

//include "class/webpage.class.php";

$html = <<<HTML

<h1 style="text-align:center;">Espace Jeu de Rôle</h1>

<nav>
    <ul class="nav_bar">
        <li><a href="index.php">Personnages</a></li>
        <li><a href="creation_personnage.php">Création de personnage</a></li>
        <li><a href="background.php">Background</a></li>
    </ul>
</nav>
<hr>

HTML;

return $html;