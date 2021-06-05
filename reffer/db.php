<?php 
$dsn = 'mysql:host=localhost;dbname=company';
$username = 'root';
$password = 'Data@2020';
$options = [];


try{
    $connection = new PDO($dsn, $username,$password,$options);
    
} catch(PDOException $e){

}
?>