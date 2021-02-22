<?php

include "requete_sql.php";

if(isset($_POST["pseudo"]) && !empty($_POST["pseudo"]) && isset($_POST["nom"]) && !empty($_POST["nom"]) && isset($_POST["prenom"]) && !empty($_POST["prenom"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["pass"]) && !empty($_POST["pass"])){
    setUser($_POST["pseudo"],$_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["pass"]);
    foreach(getUser() as $donnee){
        if ($donnee["email"] == $_POST["email"] && $donnee["password"] == $_POST["pass"]){
            session_start();
            $_SESSION["id"] = $donnee["id"];
            $_SESSION["pseudo"] = $donnee["user_name"];
            header("location:index.php");
        }
    }
}
