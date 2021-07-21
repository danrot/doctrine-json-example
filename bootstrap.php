<?php
use Doctrine\ORM\Mapping\Driver\AttributeDriver;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createConfiguration($isDevMode, $proxyDir, $cache);
$config->setMetadataDriverImpl(new AttributeDriver([__DIR__."/src"]));

$conn = array(
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'dbname' => 'json_doctrine',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
