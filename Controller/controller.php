<?php

require_once('Model/database.php');

$link = new Database();
$datos = $link->getlinks();
require_once('Views/vista.php');

