<?php

use App\Services;

require 'vendor/autoload.php';
require 'config/bootstrap.php';

$config = require 'config/config.php';
$pathDatabase = $config['pathDatabase'];

// DELETE data if have any
if (file_exists($pathDatabase)) {
    unlink($pathDatabase);
    echo "Data has been deleted\n";
}

$serviceLocator = \App\ServiceLocator::getInstance();

/** @var PDO $pdo */

$pdo = $serviceLocator->get(Services::PDO);

$pdo->exec("
CREATE TABLE book (
  id INT PRIMARY KEY,
  name VARCHAR (255) NOT NULL
);
");

echo "Book table has been created\n";
