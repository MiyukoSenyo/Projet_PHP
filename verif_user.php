<?php

include "requete_sql.php";

if(isset($_POST["your_email"]) && !empty($_POST["your_email"]) && isset($_POST["your_pass"]) && !empty($_POST["your_pass"])){
    foreach(getUser() as $donnee){
        if ($donnee["email"] == $_POST["your_email"] && $donnee["password"] == $_POST["your_pass"]){
            session_start();
            $_SESSION["id"] = $donnee["id"];
            $_SESSION["pseudo"] = $donnee["user_name"];
            header("location:index.php");
        }
    }
}




// Inscription : Vérifier les POST
// Créer une requête "ajouter utilisateur"
// Lancer la requête
// Ouverture de session