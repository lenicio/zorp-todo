<?php
require "./config.php";

$sql = "SELECT * FROM todo";
$sql = $pdo->prepare($sql);
$sql->execute();
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

// foreach ($dados as $item) {
//   echo $item['id'] . "<br>";
//   echo $item['descricao'] . "<br>";
//   echo "<hr>";
// }

// exit();

?>


<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
  <link rel="stylesheet" href="./style.css">
  <script src="https://kit.fontawesome.com/561265e797.js" crossorigin="anonymous"></script>
</head>

<body>
  <main>
    <h1>TODO List</h1>

    <form method="get" action="create-todo.php">
      <input type="text" name="todo" id="todo" placeholder="Adicione uma tarefa...">
      <input type="submit" value="Adicionar">
    </form>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Descrição</th>
          <th>Opções</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($dados as $item): ?>
          <tr>
            <td><?= $item['id']; ?></td>
            <td><?= $item['descricao']; ?></td>
            <td>
              <i class="fa-solid fa-pen"></i>
              <i class="fa-solid fa-trash"></i>
            </td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </main>
</body>

</html>