<?php


require_once ('Controller/controller.php');


if($_POST){

 require_once('Model/database.php');
 $sitios = $_POST['links'];
 $asd = new Database();
 $asd->addlinks($sitios);

}







