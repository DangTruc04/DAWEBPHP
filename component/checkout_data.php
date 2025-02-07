<?php
include($level."DB/DB2.php");
if(isset($_COOKIE['username']))
{
    $iduser=$_COOKIE['username'];
$SQL_user="select * from `user` where user_name=:iduser";

$users=$db->prepare($SQL_user);
$users ->bindValue(':iduser',$iduser,PDO::PARAM_STR);
$users->execute();
$users_detail = $users->fetchAll();
}


?>