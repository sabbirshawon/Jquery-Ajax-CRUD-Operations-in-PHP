<?php


  require 'db_config.php';


  $id  = $_POST["id"];
  $post = $_POST;


  $sql = "UPDATE tbl_items SET title = '".$post['title']."'
    ,description = '".$post['description']."' 
    WHERE id = '".$id."'";


  $result = $mysqli->query($sql);


  $sql = "SELECT * FROM tbl_items WHERE id = '".$id."'"; 


  $result = $mysqli->query($sql);


  $data = $result->fetch_assoc();


  echo json_encode($data);


?>
