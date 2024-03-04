<?php
require "./config.php";

$sql = "CREATE TABLE IF NOT EXISTS todo (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  descricao TEXT NOT NULL
)";

$sql = $pdo->prepare($sql);
$sql->execute();

$sql = "INSERT INTO todo (descricao) VALUES ('Estudar PHP')";
$sql = $pdo->prepare($sql);
$sql->execute();