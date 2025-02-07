<?php
if(!empty($_REQUEST['action']) && $_REQUEST['action']== 'search' && !empty($_POST))
{
  $_SESSION['type_filter'] = $_POST;
  
}
if(!empty($_SESSION['type_filter']))
{
  $where="";
  foreach($_SESSION['type_filter'] as $field => $value)
  {
    if(!empty($value))
    {
      switch($field)
      {
        case 'ID': 
          $where .= (!empty($where))?"AND"."`".$field."` LIKE '%".$value."%'":"`".$field."` LIKE '%".$value."%'";
          break;
          case 'name':
            $where .= (!empty($where))?"AND"."`".$field."` LIKE '%".$value."%'":"`".$field."` LIKE '%".$value."%'";
          break;

          case 'parent_id':
            $where .= (!empty($where))?"AND"."`".$field."` LIKE '%".$value."%'":"`".$field."` LIKE '%".$value."%'";
          break;
      }
    }
  }
  extract($_SESSION['type_filter']); 

  if(!empty($where))
  {
    $sql="select* from `category` where (".$where.")";
    $result = $db ->prepare($sql);
    $result ->execute();
    $dsloaisp = $result -> fetchAll();
  }
  else 
  {
    $sql="select* from `category`";
  $result = $db ->prepare($sql);
  $result ->execute();
  $dsloaisp = $result -> fetchAll();
  }
  
}

?>