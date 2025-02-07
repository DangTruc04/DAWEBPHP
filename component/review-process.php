<?php 
  $level = '../';
  include $level."DB/DB2.php";
  if(isset($_COOKIE['username']))
  {
    
  $productid=$_REQUEST['productid'];
  $userid=$_REQUEST['id'];
  $fullname=$_REQUEST['author'];
  $email=$_REQUEST['email'];
  $content=$_REQUEST['comment'];
  $day = date('Y-m-d H:i:s');
  var_dump($day);
  
  $SQL_str_themreview="INSERT INTO `feedback`( `product_id`, `user_id`, `fullname`, `email`, `content`, `day_at`) VALUES (:productid, :userid, :fullname, :email, :content, :day)";

  $ketqua = $db->prepare($SQL_str_themreview);
  $ketqua->bindValue(':productid',$productid, PDO::PARAM_STR);
  $ketqua->bindValue(':userid', $userid, PDO::PARAM_STR);
  $ketqua->bindValue(':fullname', $fullname, PDO::PARAM_STR);
  $ketqua->bindValue(':email', $email, PDO::PARAM_STR);
  $ketqua->bindValue(':content', $content, PDO::PARAM_LOB);
  $ketqua->bindValue(':day', $day, PDO::PARAM_STR);
  $ketqua->execute(); 

  echo '<script>alert("Da them binh luan moi");</script>';
  echo '<script>location.href="../index.php"</script>';

  //header('location:../index.php');
  }
  else{
    header('location:../pages/login.php');
  }
  ?>
  