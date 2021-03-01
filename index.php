<?php

include_once 'database.php';


if($_POST){
  
  $links = $_POST['links'];
  $sql_agregar = 'INSERT INTO enlaces (links) VALUES (?)';
  $sentencia_agregada = $pdo->prepare($sql_agregar);
  $sentencia_agregada->execute(array($links));

}

$consulta = 'SELECT * FROM `enlaces`';
$sql =  $pdo->prepare($consulta);
$sql->execute();
$resultado = $sql->fetchAll();




?>



<!DOCTYPE html>
<html>
<head>
  <title>App-Links</title>
</head>
<body>
  <form method="POST">
    <input type="url" name="links" />
    <input type="submit" name="send">
  </form>
  <?php foreach ($resultado as $datos):?>
  <h1><?php echo $datos['links'];?></h1>
  <?php endforeach ?>
</body>
</html>