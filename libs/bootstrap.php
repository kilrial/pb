<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Dotenv\Dotenv;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer yaml or XML
// $config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
// $config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$conn = array(
    'dbname' => $_ENV['dbname'],
    'user' =>   $_ENV['user'], 
    'password' =>$_ENV['password'],
    'driver' => 'pdo_mysql',
    'host' => $_ENV['host']
);

$entityManager = EntityManager::create($conn, $config);