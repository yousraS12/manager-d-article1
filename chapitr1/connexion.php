<?php
$host='localhost';
$dbname='blogdb';
$user='root';
$password=''; 
try{
    $pdo=new PDO ("mysql:host=$host; dbname=$dbname; charset=utf8",$user , $dbname);
    $pdo->getAttributte(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"connexion réussie a la base $dbname"; 
}catch(PDOException $e ){
    echo"Erreur de la connexion ";
}





























// $host = 'localhost';
// $dbname = 'blogdb';
// $username = 'root';
// $password = '';

// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connexion réussie à la base $dbname";
// } catch (PDOException $e) {
//     echo "Erreur de connexion : " . $e->getMessage();
// }
