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
 <?php 
  for($i=0; $i<count($datos); $i++){
  	?>
    <h1><?php echo $datos[$i]['links'];?></h1>
    <?php
   }
?>
</body>
</html>