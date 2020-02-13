<?php
    session_start(); 
    require "../../include/core/bdd.php"; 

    $id_Projet=$_GET["id"];
	$reqDelete = $db->prepare("DELETE FROM projet WHERE id_Projet=:id_Projet");
    $reqDelete->execute(array("id_Projet" => $id_Projet));
    $reqDelete->bindParam(":id_Projet", $id_Projet);
    header('Location: ../index.php');
    