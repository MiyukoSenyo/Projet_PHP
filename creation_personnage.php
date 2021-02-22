<?php

$header = include("header.php");
include "class/webpage.class.php";
$stat;

$js = <<<JS
function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min) ) + min;
}

function generer(){
    var ids = document.getElementById("id_stats");
    var tab = [];
    for(var d=0; d<6; d++){
        tab.push(getRndInteger(1,7)+getRndInteger(1,7)+getRndInteger(1,7));
    }
    ids.innerHTML=tab;
}

function generer_hp(){
    var ids = document.getElementById("hp");
    var input_hp = document.getElementById("input_hp");
    var rand = getRndInteger(1,11);
    ids.innerHTML=rand;
    input_hp.value=rand;
}

function set_stat(id){
    var stat = document.getElementById(id);
    var id_input = "input_"+id;
    var input = document.getElementById(id_input);
    if(input.value == 1){
        stat.innerHTML = "-5";
    } else if (input.value == 2 || input.value == 3){ 
        stat.innerHTML = "-4";
    } else if (input.value == 4 || input.value == 5){ 
        stat.innerHTML = "-3";
    } else if (input.value == 6 || input.value == 7){
        stat.innerHTML = "-2";
    } else if (input.value == 8 || input.value == 9){
        stat.innerHTML = "-1";
    } else if (input.value == 10 || input.value == 11){
        stat.innerHTML = "0";
    } else if (input.value == 12 || input.value == 13){
        stat.innerHTML = "+1";
    } else if (input.value == 14 || input.value == 15){
        stat.innerHTML = "+2";
    } else if (input.value == 16 || input.value == 17){
        stat.innerHTML = "+3";
    } else if (input.value >= 18){
        stat.innerHTML = "+4";
    }

}

JS;

$html = $header;

$html .= <<<HTML
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="post" action="creation.php">
                    <div class="card">
                        <div class="row">
                            <div class="col">
                                <label for="nom">Nom : </label>
                                <input name="nom" type="text" required>
                                <br>
                                <label for="classe">Classe : </label>
                                <input name="classe" type="text" required>
                            </div>
                            <div class="col">
                                <label for="niveau">Niveau : </label>
                                <input name="niveau" type="number" required>
                                <br>
                                <label for="race">Race : </label>
                                <input name="race" type="text" required>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <div class="card">
                                    <p>Force</p>
                                    <h3 id="force">0</h3>
                                    <input type="number" name="force" onchange="set_stat('force')" id="input_force" required>
                                </div>
                                <div class="card">
                                    <p>Dextérité</p>
                                    <h3 id="dexterite">0</h3>
                                    <input type="number" name="dexterite" onchange="set_stat('dexterite')" id="input_dexterite" required>
                                </div>
                                <div class="card">
                                    <p>Constitution</p>
                                    <h3 id="constitution">0</h3>
                                    <input type="number" name="constitution" onchange="set_stat('constitution')" id="input_constitution" required>
                                </div>
                                <div class="card">
                                    <p>Intelligence</p>
                                    <h3 id="intelligence">0</h3>
                                    <input type="number" name="intelligence" onchange="set_stat('intelligence')" id="input_intelligence" required>
                                </div>
                                <div class="card">
                                    <p>Sagesse</p>
                                    <h3 id="sagesse">0</h3>
                                    <input type="number" name="sagesse" onchange="set_stat('sagesse')" id="input_sagesse" required>
                                </div>
                                <div class="card">
                                    <p>Charisme</p>
                                    <h3 id="charisme">0</h3>
                                    <input type="number" name="charisme" onchange="set_stat('charisme')" id="input_charisme" required>
                                </div>
                                <div class="card">
                                    <p>Point de vie</p>
                                    <h3 id="hp">0</h3>
                                    <input type="hidden" name="hp" id="input_hp" value="0">
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="card">
                                    <div>
                                        <input type="checkbox" name="acrobaties">
                                        <label for="acrobaties">Acrobaties</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="arcanes">
                                        <label for="arcanes">Arcanes</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="athletisme">
                                        <label for="athletisme">Athletisme</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="discretion">
                                        <label for="discretion">Discrétion</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="dressage">
                                        <label for="dressage">Dressage</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="escamotage">
                                        <label for="escamotage">Escamotage</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="histoire">
                                        <label for="histoire">Histoire</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="intimidation">
                                        <label for="intimidation">Intimidation</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="investigation">
                                        <label for="investigation">Investigation</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="medecine">
                                        <label for="medecine">Médecine</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="nature">
                                        <label for="nature">Nature</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="perception">
                                        <label for="perception">Perception</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="perspicacite">
                                        <label for="perspicacite">Perspicacité</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="persuasion">
                                        <label for="persuasion">Persusaion</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="religion">
                                        <label for="religion">Religion</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="representation">
                                        <label for="representation">Representation</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="survie">
                                        <label for="survie">Survie</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="tromperie">
                                        <label for="tromperie">Tromperie</label>
                                    </div>                        
                                </div>
                                <br><br>
                                <button type="submit" style="width:25%; float:right">Valider</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <p style="margin-top:50px;">Bienvenue sur la page de création de personnage, vous pourrez ici créer votre personnage de Jeu de Rôle "Donjon et Dragon 5e"</p>
                <p>Appuyer sur ce bouton pour générer vos dés de caractéristique</p>
                <input type="submit" name="generer" id="generer" value="Générer vos stats !" onclick="generer()"></input>
                <div id="id_stats"></div>
                <br><br>
                <p>Appuyer sur ce bouton pour générer votre dé de vie</p>  
                <input type="submit" name="generer" id="generer" value="Générer vos point de vie !" onclick="generer_hp()"></input>
            </div>
        </div>
    </div>
HTML;

$page = new WebPage("Création de personnages");
$page->appendContent($html);
$page->appendCssUrl("css/style.css");
$page->appendCssUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css");
$page->appendJs($js);





echo $page->buildPage();