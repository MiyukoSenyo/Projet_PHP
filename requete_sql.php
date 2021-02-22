<?php

include "class/MyPDO.class.php";

MyPDO::setConfiguration('mysql:host=localhost;dbname=jdr;charset=utf8', 'root', '');

function getDescription(){
    $bdd = MyPDO::getInstance();
    $sql = $bdd->prepare("SELECT * from descrption");
    $sql->execute();
    return $sql->fetchAll();
}

function getPersonnage($id_user){
    $bdd = MyPDO::getInstance();
    $sql = $bdd->prepare("SELECT * from personnage WHERE id_user = ? OR id_user = 0");
    $sql->execute(array($id_user));
    return $sql->fetchAll();
}

function getPersonnageID($id){
    $bdd = MyPDO::getInstance();
    $sql = $bdd->prepare("SELECT * from personnage WHERE id = ?");
    $sql->execute(array($id));
    return $sql->fetchAll();
}

function setBackground($description){
    $bdd = MyPDO::getInstance();
    $sql = $bdd->prepare("INSERT INTO descrption(description) VALUES(?)");
    $sql->execute(array($description));
}

function getUser(){
    $bdd = MyPDO::getInstance();
    $sql = $bdd->prepare("SELECT * from user");
    $sql->execute();
    return $sql->fetchAll();
}

function setUser($user, $first, $last, $email, $pass){
    $bdd = MyPDO::getInstance();
    $sql = $bdd->prepare("INSERT INTO user(user_name, first_name, last_name, email, password) VALUES(?,?,?,?,?)");
    $sql->execute(array($user, $first, $last, $email, $pass));
}

function setCarac($idu, $name, $class, $level, $race, $hp, $strength, $dexterity, $constitution, $intelligence, $wisdom, $charisma){
    $bdd = MyPDO::getInstance();
    $sql = $bdd->prepare("INSERT INTO personnage(id_user, name, class, level, race, hp, strength, dexterity, constitution, intelligence, wisdom, charisma) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
    $sql->execute(array($idu, $name, $class, $level, $race, $hp, $strength, $dexterity, $constitution, $intelligence, $wisdom, $charisma));
    return $bdd->lastInsertId();
}

function getComp($id_carac){
    $bdd = MyPDO::getInstance();
    $sql = $bdd->prepare("SELECT * from competences WHERE id_carac = ?");
    $sql->execute(array($id_carac));
    return $sql->fetchAll();
}

function setComp($id_carac, $acrobatie, $arcanes, $athletisme, $discretion, $dressage, $escamotage, $histoire, $intimidation, $investigation, $medecine, $nature, $perception, $perspicasité, $persuasion, $religion, $representation, $survie, $tromperie){
    $bdd = MyPDO::getInstance();
    $sql = $bdd->prepare("INSERT INTO competences(id_carac, acrobatie, arcanes, athletisme, discretion, dressage, escamotage, histoire, intimidation, investigation, medecine, nature, perception, perspicasité, persuasion, religion, representation, survie, tromperie) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $sql->execute(array($id_carac, $acrobatie, $arcanes, $athletisme, $discretion, $dressage, $escamotage, $histoire, $intimidation, $investigation, $medecine, $nature, $perception, $perspicasité, $persuasion, $religion, $representation, $survie, $tromperie));
}