<?php

include "class/MyPDO.class.php";

MyPDO::setConfiguration('mysql:host=localhost;dbname=jdr;charset=utf8', 'root', '');

function getDescription(){
    $bdd = MyPDO::getInstance();
    $sql = $bdd->prepare("SELECT * from descrption");
    $sql->execute();
    return $sql->fetchAll();
}

function getPersonnage(){
    $bdd = MyPDO::getInstance();
    $sql = $bdd->prepare("SELECT * from personnage");
    $sql->execute();
    return $sql->fetchAll();
}