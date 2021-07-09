<?php session_start();
include_once("conection.php");

$id= $_GET['id'];

$result = "SELECT * FROM list WHERE id='$id'";
$resultado = mysqli_query($conn, $result);
$row = mysqli_fetch_array($resultado);

?>
<!DOCTYPE html>
<html>
<body>

<h2>UPDATE</h2>

<form action="update_proc.php" method="POST">
  <label for="nme">Name:</label><br>
  <input type="text" id="name" name="name" value="<?php echo $row['name'] ?>" ><br>
  <label for="cpf">CPF:</label><br>
  <input type="text" id="cpf" name="cpf" value="<?php echo $row['cpf'] ?>"><br>
  <label for="phone">PHONE:</label><br>
  <input type="text" id="phone" name="phone" value="<?php echo $row['phone'] ?>" ><br><br>
  <input type="hidden" id="id" name="id" value="<?php echo $id ?>" >
  <input type="submit" value="Submit">
  
</form>
<br>
<a href="index.php"><button>back</button></a>



</body>
</html>
