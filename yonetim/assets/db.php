<?php 

try {

     $host = "localhost";
      $dbname = "nunica209_kurumsal";
      $username = "nunica209_kurumsal";
      $password = "Kurumsal2023.";
      $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
}

catch (PDOExpception $e) {

  echo $e->getMessage();
}









?>