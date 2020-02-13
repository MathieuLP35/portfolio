<?php 
session_start();
require "../../include/core/bdd.php"; 

$users = $_POST["mail"];
$password = sha1($_POST["mdp"]);

$reponse = $db->prepare("SELECT users_Name, users_Firstname, users_Email, users_Pass, users_Admin FROM users WHERE users_Email = :usermail AND  users_Pass = :userpass OR users_Email = :usermail OR users_Pass = :userpass;");
$reponse->bindParam(':usermail', $users, PDO::PARAM_STR, 255);
$reponse->bindParam(':userpass', $password, PDO::PARAM_STR, 255);
$reponse->execute();

while ($data=$reponse->fetch()){

    if ($users == $data["users_Email"] && $password == $data["users_Pass"])
    {
        $_SESSION["login_data"] = array(
            'id'=> $data["id_users"],
            'name'=> $data["users_Name"],
            'firstname'=> $data["users_Firstname"],
            'email'=> $data["users_Email"],
            'admin'=> $data["users_Admin"]
        );
        header('Location: ../../index.php');
    }
    else{
        header('Location: ../../no-connect.html');
    }
}


?>