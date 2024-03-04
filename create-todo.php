<?php

if (!empty($_GET['todo'])) {
  require "./config.php"; 
  $todoItem = $_GET['todo'];

  $sql = "INSERT INTO todo (descricao) VALUES (:descricao)";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":descricao", $todoItem);
  $sql->execute();

  header("Location: todo.php");
  
} else {
  header("Location: todo.php");
}
