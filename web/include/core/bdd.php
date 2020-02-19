<?php 
    try {
        $user = 'fp8fo_portfolio';
        $pass = 'Exca56930.';
        $db = new PDO('mysql:host=fp8fo.myd.infomaniak.com;dbname=fp8fo_portfolio', $user, $pass);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
?>