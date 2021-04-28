<?php

require_once 'vendor/autoload.php';

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

$paths = [realpath(__DIR__ . '/src/Model')];
$isDevMode = false;

$dbParams = [
    'driver' => 'pdo_pgsql',
    'host' => '127.0.0.1',
    'port' => 5432,
    'user' => 'meete',
    'password' => 'p4ssw0rd',
    'dbname' => 'migration',
];

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$entityManager = EntityManager::create($dbParams, $config);
