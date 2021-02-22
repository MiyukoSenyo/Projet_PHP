<?php

$header = include("header.php");
include "class/webpage.class.php";
include "requete_sql.php";

$html = $header;

$html .= <<<HTML

    <div class="container">
        <div class="row">
HTML;

if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
} else {
  $id = 0;
}


foreach(getPersonnage($id) as $donnee){

$html .= <<<HTML
<section class=col-3>
    
  <div class="container">
    <div class="card">
      <div class="box">
        <div class="content">
          <h2>$donnee[name]</h2>
          <p>Level: $donnee[level]</p>
          <p>Class: $donnee[class]</p>
          <a href="personnage.php?id=$donnee[id]" class="button">Details</a>
          
        </div>
      </div>
    </div>
  </div>
</section>


HTML;
}


$html .= <<<HTML
        </div>
    </div>
HTML;

$page = new WebPage("Backgrounds");
$page->appendContent($html);
$page->appendCssUrl("css/style.css");
$page->appendCssUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css");




echo $page->buildPage();