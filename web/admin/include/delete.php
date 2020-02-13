<?php
    session_start(); 
    require "../../include/core/bdd.php"; 

    $id_users=$_GET["id"];
	$reqDelete = $db->prepare("DELETE FROM users WHERE id_users=:id_users");
    $reqDelete->execute(array("id_users" => $id_users));
    $reqDelete->bindParam(":id_users", $id_users);
    header('Location: ../index.php');
    