<?php
define('BASE_PATH', realpath(dirname(__FILE__)));
// Inclui o controlador de usuários
require_once BASE_PATH . '/Controllers/UserController.php';

// Instancia o controlador e chama o método index
$controller = new UserController();
$controller->index();