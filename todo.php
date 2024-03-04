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

    <form>
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
        <tr>
          <td>1</td>
          <td>Estudar PHP</td>
          <td>
            <i class="fa-solid fa-pen"></i>
            <i class="fa-solid fa-trash"></i>
          </td>
        </tr>

        <tr>
          <td>2</td>
          <td>Estudar HTML / CSS</td>
          <td>
            <i class="fa-solid fa-pen"></i>
            <i class="fa-solid fa-trash"></i>
          </td>
        </tr>

        <tr>
          <td>3</td>
          <td>Praticar Exercícios</td>
          <td>
            <i class="fa-solid fa-pen"></i>
            <i class="fa-solid fa-trash"></i>
          </td>
        </tr>


      </tbody>
    </table>
  </main>
</body>

</html>