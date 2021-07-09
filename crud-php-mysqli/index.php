<?php session_start();
include_once("conection.php");
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
  <?php
            $result = "SELECT * FROM list";
            $resultado = mysqli_query($conn, $result);
            while($row_list = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>".$row_list['id']."</td>";
            echo "<td>".$row_list['name']."</td>";
            echo "<td>".$row_list['cpf']."</td>";
            echo "<td>".$row_list['phone']."</td>";
            echo "<td><a href='delete_proc.php?id=".$row_list['id']."'>Delete</a> | <a href='update.php?id=".$row_list['id']."'>Update</a></td>";
            echo "</tr>";
            }
            ?>
  </tr>
</table>

</body>
</html>