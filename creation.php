<?php

session_start();
include "requete_sql.php";

if(isset($_POST["nom"]) && !empty($_POST["nom"]) && isset($_POST["classe"]) && !empty($_POST["classe"])  && isset($_POST["niveau"]) && !empty($_POST["niveau"])  && isset($_POST["race"]) && !empty($_POST["race"]) && isset($_POST["hp"]) && !empty($_POST["hp"]) && isset($_POST["force"]) && !empty($_POST["force"]) && isset($_POST["dexterite"]) && !empty($_POST["dexterite"]) && isset($_POST["constitution"]) && !empty($_POST["constitution"]) && isset($_POST["intelligence"]) && !empty($_POST["intelligence"]) && isset($_POST["sagesse"]) && !empty($_POST["sagesse"]) && isset($_POST["charisme"]) && !empty($_POST["charisme"])){
    if(isset($_SESSION["id"])){
        $idCarac = setCarac($_SESSION["id"], $_POST["nom"], $_POST["classe"],$_POST["niveau"],$_POST["race"],$_POST["hp"],$_POST["force"],$_POST["dexterite"],$_POST["constitution"],$_POST["intelligence"],$_POST["sagesse"],$_POST["charisme"]);
        setComp($idCarac, isset($_POST["acrobaties"])?1:0, isset($_POST["arcanes"])?1:0, isset($_POST["athletisme"])?1:0, isset($_POST["discretion"])?1:0, isset($_POST["dressage"])?1:0, isset($_POST["escamotage"])?1:0, isset($_POST["histoire"])?1:0, isset($_POST["intimidation"])?1:0, isset($_POST["investigation"])?1:0, isset($_POST["medecine"])?1:0, isset($_POST["nature"])?1:0, isset($_POST["perception"])?1:0, isset($_POST["perspicacite"])?1:0, isset($_POST["persuasion"])?1:0, isset($_POST["religion"])?1:0, isset($_POST["representation"])?1:0, isset($_POST["survie"])?1:0, isset($_POST["tromperie"])?1:0);
        header("location:index.php");
    }
}

