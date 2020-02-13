<?php
    session_start(); 
    require "../../include/core/bdd.php"; 

    $id_recommandation=$_GET["id"];
	$reqDelete = $db->prepare("DELETE FROM recommandation WHERE id_recommandation=:id_recommandation");
    $reqDelete->execute(array("id_recommandation" => $id_recommandation));
    $reqDelete->bindParam(":id_recommandation", $id_recommandation);
    header('Location: ../index.php');
    