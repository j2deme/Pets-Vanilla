<?php

require_once 'src/controllers/PetController.php';
require_once 'src/models/Pet.php';

$controller = new PetController();
$controller->handle($_GET['action'], $_GET['id']);