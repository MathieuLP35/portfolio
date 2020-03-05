<?php 
    require "access.php";
    try {
        $db = new PDO('mysql:host='.$host.';dbname='.$base.'', $user, $pass);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
?>