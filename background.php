<?php

$header = include("header.php");
include "class/webpage.class.php";
include "requete_sql.php";

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
        <button type="button" class="btn btn-success mt-2">Ajouter un background</button>
    </div>
    

HTML;

$page = new WebPage("Backgrounds");
$page->appendContent($html);
$page->appendCssUrl("css/style.css");
$page->appendCssUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css");





echo $page->buildPage();