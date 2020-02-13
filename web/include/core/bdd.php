<?php 
    try {
        $user = '';
        $pass = '';
        $db = new PDO('mysql:host=localhost;dbname=phpsql', $user, $pass);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
?>