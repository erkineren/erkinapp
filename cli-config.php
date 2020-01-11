<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\ORM\EntityManager;
use function ErkinApp\Helpers\handleApp;

ini_set('max_execution_time', 60 * 60 * 24);
ini_set('memory_limit', '-1');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//define('APP_PATH', BASE_PATH . '/app');
//define('LANGUAGE_PATH', BASE_PATH . '/languages');

require_once BASE_PATH . '/config/config.php';
$loader = require BASE_PATH . '/vendor/autoload.php';

AnnotationRegistry::registerLoader('class_exists');

$em = ErkinApp()->Get(EntityManager::class);

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));

return $helperSet;