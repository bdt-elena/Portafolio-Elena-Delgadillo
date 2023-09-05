<?php

use Dotenv\Dotenv;
use Model\SuperClass;
require __DIR__ . '/../vendor/autoload.php';

// Añadir Dotenv
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

require 'database.php';

SuperClass::setDB($db);
?>