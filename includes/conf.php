<?php
$servername = 'localhost';
$username ='root';
$password= '';
$database='';
$database="academyit10";
try {
    $db = new PDO("mysql:host=$servername;dbname=$database",$username,$password,);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');

}
catch (PDOException $e){
    echo $e->getMessage();
}