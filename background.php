<?php

$header = include("header.php");
include "class/webpage.class.php";
include "requete_sql.php";

if(isset($_POST["background"]) && !empty($_POST["background"])){
    setBackground($_POST["background"]);
    header("location:background.php");
}

$html = $header;

$html .= <<<HTML

    <div class="container">
        <div class="row">
HTML;
    foreach(getDescription() as $donnee){
        $html .= <<<HTML
            <div class="card my-1">
                <p>$donnee[description]</p>
            </div>
HTML;
    }


$html .= <<<HTML
        </div>
        <button type="button" class="btn btn-success mt-2" onclick="document.getElementById('b_form').style.display='block'">Ajouter un background</button>
        <form method="post" style="display:none" id="b_form">
            <div>
                <label for="background">Entrez votre background : </label>
                <textarea name="background" class="w-100" style="height : 200px"></textarea>
                <button type="submit" style="float:right;">Valider</button>
            </div>
        </form>
    </div>
    

HTML;

$page = new WebPage("Backgrounds");
$page->appendContent($html);
$page->appendCssUrl("css/style.css");
$page->appendCssUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css");





echo $page->buildPage();