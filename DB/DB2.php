<?php 

    $host = 'localhost';
    $dbname='tkngan_php';
    $username='root';
    $password ='';
    $options = array( 
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        PDO:: MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    );

    $conn=("mysql:host=$host;dbname=$dbname");
    $_option='';
    try {
        $db = new PDO($conn, $username, $password, $options);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
        exit;
    
    }

?>