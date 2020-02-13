<?php
require "../../include/core/bdd.php"; 


$projetName = $_POST["nom"];
$projetImg = $_POST["img"];
$projetDesc = $_POST["desc"];
$projetCategorie = $_POST["projetcategorie"];

$data = $db->prepare("INSERT INTO projet (projet_Nom, projet_Description, projet_Image, id_Projet_categorie) VALUES (:projetName, :projetDesc, :projetImg, :projetCategorie)");
$data -> bindParam(':projetName', $projetName, PDO::PARAM_STR, 255);
$data -> bindParam(':projetDesc', $projetDesc, PDO::PARAM_STR, 255);
$data -> bindParam(':projetImg', $projetImg, PDO::PARAM_STR, 255);
$data -> bindParam(':projetCategorie', $projetCategorie, PDO::PARAM_INT);
$data -> execute();

header('Location: ../../index.php');