<?php

include __DIR__ . '/vendor/autoload.php';

define('CIRCULATE_BASE_PATH', __DIR__);

$logger = new Monolog\Logger('Circulate');
$logger->pushHandler(new Monolog\Handler\StreamHandler(CIRCULATE_BASE_PATH . DIRECTORY_SEPARATOR . '_storage' . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR . 'circulate.log'));
Monolog\ErrorHandler::register($logger);

if (file_exists(CIRCULATE_BASE_PATH . DIRECTORY_SEPARATOR . '.env')) {
    $dotenv = new Dotenv\Dotenv(CIRCULATE_BASE_PATH);
    $dotenv->load();
}

new Circulate\Circulate(CIRCULATE_BASE_PATH, $logger);