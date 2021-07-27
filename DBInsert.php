<?php

require "DBconnect.php";


  function login($Username, $Password){
       $conn =connect();
    $sql = $conn->prepare("INSERT INTO users (Username, Password) VALUES (?, ?)");
    $sql-> bind_param("ss",$Username, $Password);
    

   $sql->execute();
   $sql->close();
    $conn->close();
  
}
?>