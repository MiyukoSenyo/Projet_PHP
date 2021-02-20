<?php

$header = include("header.php");
include "class/webpage.class.php";

$html = $header;

$html .= <<<HTML
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="row">
                        <div class="col">
                            <label for="nom">Nom : </label>
                            <input name="nom" type="text">
                            <br>
                            <label for="classe">Classe : </label>
                            <input name="classe" type="text">
                        </div>
                        <div class="col">
                            <label for="niveau">Niveau : </label>
                            <input name="niveau" type="number">
                            <br>
                            <label for="race">Race : </label>
                            <input name="race" type="text">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="card">
                                <p>Force</p>
                                <h3>0</h3>
                                <input type="number" name="force">
                            </div>
                            <div class="card">
                                <p>Dextérité</p>
                                <h3>0</h3>
                                <input type="number" name="dexterite">
                            </div>
                            <div class="card">
                                <p>Constitution</p>
                                <h3>0</h3>
                                <input type="number" name="constitution">
                            </div>
                            <div class="card">
                                <p>Intelligence</p>
                                <h3>0</h3>
                                <input type="number" name="intelligence">
                            </div>
                            <div class="card">
                                <p>Sagesse</p>
                                <h3>0</h3>
                                <input type="number" name="sagesse">
                            </div>
                            <div class="card">
                                <p>Charisme</p>
                                <h3>0</h3>
                                <input type="number" name="charisme">
                            </div>
                            <div class="card">
                                <p>Point de vie</p>
                                <h3>0</h3>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
HTML;

$page = new WebPage("Création de personnages");
$page->appendContent($html);
$page->appendCssUrl("css/style.css");
$page->appendCssUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css");





echo $page->buildPage();