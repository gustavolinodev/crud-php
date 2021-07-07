<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>CRUD MYSQLI BASIC</h2>
<div>
<h3>Actions</h3>
<a href="insert.php"><button>INSERT</button></a>
<br><br>
</div>

<?php if(isset($_SESSION['usuario_criado'])){
                    echo $_SESSION['usuario_criado'];
                    unset($_SESSION['usuario_criado']);
            }?>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>cpf</th>
    <th>phone</th>
    <th>Actions</th>
  </tr>
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>CPF</td>
    <td>PHONE</td>
    <td>Actions</td>
  </tr>
</table>

</body>
</html>
