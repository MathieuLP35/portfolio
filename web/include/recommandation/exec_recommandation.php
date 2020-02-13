<?php
require "../core/bdd.php"; 

$recommandationName = $_POST["nom"];
$recommandationDesc = $_POST["desc"];

$data = $db->prepare("INSERT INTO recommandation (recommandation_Name, recommandation_Date, recommandation_Desc) VALUES (:recommandationName, :recommandationDate, :recommandationDesc)");
$data -> bindParam(':recommandationName', $recommandationName, PDO::PARAM_STR, 255);
$data -> bindParam(':recommandationDesc', $recommandationDesc, PDO::PARAM_STR, 255);
$data -> bindParam(':recommandationDate', date('Y-m-d'), PDO::PARAM_STR, 255);
$data -> execute();

header('Location: ../../index.php');