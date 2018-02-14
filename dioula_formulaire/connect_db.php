<?php


$serveur = "localhost";
$login = "root";
$passwd = "test";
$dbname = "school";

try{

	$connect = new PDO('mysql:host='.$serveur.';dbname='.$dbname.';charset=utf8',$login,$passwd);
 	$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);




}catch(PDOException $e){
    echo 'Erreur !!!'.$e->getMessage();
     echo 'Echec connexion a la base de donnée';
}





?>