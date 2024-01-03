<?php
$servername = 'localhost';
$username ='root';
$password= '';
$database='';
try {
    $db = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "successfully connected";
}
catch (PDOException $e){
    echo $e->getMessage();
}
