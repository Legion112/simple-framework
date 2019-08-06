<?php

use App\Services;

$serviceLocator = \App\ServiceLocator::getInstance();

$config = require 'config.php';

$serviceLocator->register(Services::PDO, static function () use ($config) {
    return new PDO("sqlite:" . $config['pathDatabase'], null, null, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
});