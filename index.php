<?php

$header = include("header.php");
include "class/webpage.class.php";
include "requete_sql.php";

$html = $header;

$html .= <<<HTML

    <div class="container">
        <div class="row">
HTML;
    foreach(getPersonnage() as $donnee){
        $html .= <<<HTML
            <div class="col-3">
                <div class="card">
                    <p>$donnee[name]</p>
                    <p>$donnee[level]</p>
                    <p>$donnee[class]</p>
                    <button>
                        Détails
                    </button>
                </div>
            </div>
HTML;
    }  
        $html .= <<<HTML
        </div>
    </div>

HTML;

$page = new WebPage("Mes personnages");
$page->appendContent($html);
$page->appendCssUrl("css/style.css");
$page->appendCssUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css");





echo $page->buildPage();