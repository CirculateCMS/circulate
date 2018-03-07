<?php

include __DIR__ . '/vendor/autoload.php';

define('CIRCULATE_BASE_PATH', __DIR__);

$logger = new Monolog\Logger('Circulate');
$logger->pushHandler(new Monolog\Handler\StreamHandler(CIRCULATE_BASE_PATH . '/_storage/logs/circulate.log'));
Monolog\ErrorHandler::register($logger);

$dotenv = new Dotenv\Dotenv(CIRCULATE_BASE_PATH);
$dotenv->load();

new Circulate\Circulate(CIRCULATE_BASE_PATH, $logger);