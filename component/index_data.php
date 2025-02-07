<?php 
$sql="select* from product";
$result = $db ->prepare($sql);
$result->execute();
$dssp = $result -> fetchAll();

$sql1="SELECT * FROM `product` ORDER by ID DESC;";
$result = $db ->prepare($sql1);
$result->execute();
$dssp1 = $result -> fetchAll();
// var_dump($dsorder);
// exit;
?>