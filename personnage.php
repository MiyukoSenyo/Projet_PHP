<?php

$header = include("header.php");
include "class/webpage.class.php";
include "requete_sql.php";

if(isset($_GET["id"]) && !empty($_GET["id"])){
    $id = $_GET["id"];
}

$html = $header;

foreach(getPersonnageID($id) as $donnee){
    $html .= <<<HTML
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col">
                <div class="card">
                    <div class="row">
                        <div class="col">
                            <label for="nom">Nom : $donnee[name]</label>
                            <br>
                            <label for="classe">Classe : $donnee[class]</label>
                        </div>
                        <div class="col">
                            <label for="niveau">Niveau : $donnee[level]</label>
                            <br>
                            <label for="race">Race : $donnee[race]</label>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="card">
                                <p>Force</p>
                                <h3 id="force">$donnee[strength]</h3>
                            </div>
                            <div class="card">
                                <p>Dextérité</p>
                                <h3 id="dexterite">$donnee[dexterity]</h3>
                            </div>
                            <div class="card">
                                <p>Constitution</p>
                                <h3 id="constitution">$donnee[constitution]</h3>
                            </div>
                            <div class="card">
                                <p>Intelligence</p>
                                <h3 id="intelligence">$donnee[intelligence]</h3>
                            </div>
                            <div class="card">
                                <p>Sagesse</p>
                                <h3 id="sagesse">$donnee[wisdom]</h3>
                            </div>
                            <div class="card">
                                <p>Charisme</p>
                                <h3 id="charisme">$donnee[charisma]</h3>
                            </div>
                            <div class="card">
                                <p>Point de vie</p>
                                <h3 id="hp">$donnee[hp]</h3>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="card">
HTML;
}
foreach(getComp($id) as $skill){
    if($skill["acrobatie"] == 1){
        $html .= <<<HTML
            <div>
                <input type="checkbox" name="acrobaties" checked disabled>
                <label for="acrobaties">Acrobaties</label>
            </div>
HTML;
    } else {
        $html .= <<<HTML
            <div>
                <input type="checkbox" name="acrobaties"  disabled>
                <label for="acrobaties">Acrobaties</label>
            </div>
HTML;
    }
if($skill["arcanes"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="arcanes" checked disabled>
            <label for="arcanes">Arcanes</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="arcanes"  disabled>
            <label for="arcanes">Arcanes</label>
        </div>
HTML;
}
if($skill["athletisme"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="athletisme" checked disabled>
            <label for="athletisme">Athletisme</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="athletisme"  disabled>
            <label for="athletisme">Athletisme</label>
        </div>
HTML;
}
if($skill["discretion"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="discretion" checked disabled>
            <label for="discretion">Discretion</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="discretion"  disabled>
            <label for="discretion">Discretion</label>
        </div>
HTML;
}
if($skill["dressage"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="dressage" checked disabled>
            <label for="dressage">Dressage</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="dressage"  disabled>
            <label for="dressage">Dressage</label>
        </div>
HTML;
}
if($skill["escamotage"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="escamotage" checked disabled>
            <label for="escamotage">Escamotage</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="escamotage"  disabled>
            <label for="escamotage">Escamotage</label>
        </div>
HTML;
}
if($skill["histoire"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="histoire" checked disabled>
            <label for="histoire">Histoire</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="histoire"  disabled>
            <label for="histoire">Histoire</label>
        </div>
HTML;
}
if($skill["intimidation"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="intimidation" checked disabled>
            <label for="intimidation">Intimidation</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="intimidation"  disabled>
            <label for="intimidation">Intimidation</label>
        </div>
HTML;
}
if($skill["investigation"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="investigation" checked disabled>
            <label for="investigation">Investigation</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="investigation"  disabled>
            <label for="investigation">Investigation</label>
        </div>
HTML;
}
if($skill["medecine"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="medecine" checked disabled>
            <label for="medecine">Medecine</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="medecine"  disabled>
            <label for="medecine">Medecine</label>
        </div>
HTML;
}
if($skill["nature"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="nature" checked disabled>
            <label for="nature">Nature</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="nature"  disabled>
            <label for="nature">Nature</label>
        </div>
HTML;
}
if($skill["perception"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="perception" checked disabled>
            <label for="perception">Perception</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="perception"  disabled>
            <label for="perception">Perception</label>
        </div>
HTML;
}
if($skill["perspicasité"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="perspicacite" checked disabled>
            <label for="perspicacite">Perspicacité</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="perspicacite"  disabled>
            <label for="perspicacite">Perspicacité</label>
        </div>
HTML;
}
if($skill["persuasion"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="persuasion" checked disabled>
            <label for="persuasion">Persuasion</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="persuasion"  disabled>
            <label for="persuasion">Persuasion</label>
        </div>
HTML;
}
if($skill["religion"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="religion" checked disabled>
            <label for="religion">Religion</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="religion"  disabled>
            <label for="religion">Religion</label>
        </div>
HTML;
}
if($skill["representation"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="representation" checked disabled>
            <label for="representation">Représentation</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="representation"  disabled>
            <label for="representation">Représentation</label>
        </div>
HTML;
}
if($skill["survie"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="survie" checked disabled>
            <label for="survie">Survie</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="survie"  disabled>
            <label for="survie">Survie</label>
        </div>
HTML;
}
if($skill["tromperie"] == 1){
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="tromperie" checked disabled>
            <label for="tromperie">Tromperie</label>
        </div>
HTML;
} else {
    $html .= <<<HTML
        <div>
            <input type="checkbox" name="tromperie"  disabled>
            <label for="tromperie">Tromperie</label>
        </div>
HTML;
}
       
}
    $html .= <<<HTML
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
HTML;

$page = new WebPage("Création de personnages");
$page->appendContent($html);
$page->appendCssUrl("css/style.css");
$page->appendCssUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css");





echo $page->buildPage();