<?php

$server = 'mysql:host=localhost;dbname=app_links';
$user = 'root';
$password = '';


try{

	$pdo = new PDO ($server, $user, $password);
	
	
}

catch(PDOException $e){

    print '¡Error!: ' . $e->getMessage() . "<br/>";
    die();
}
