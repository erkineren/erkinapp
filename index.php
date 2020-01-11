<?php


use Doctrine\Common\Annotations\AnnotationRegistry;
use function ErkinApp\Helpers\handleApp;
use function ErkinApp\Helpers\loadLibrary;

ini_set('max_execution_time', 60 * 60 * 24);
ini_set('memory_limit', '-1');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//define('BASE_PATH', __DIR__);

require __DIR__ . '/vendor/autoload.php';

AnnotationRegistry::registerLoader('class_exists');

try {
    handleApp();
} catch (\ErkinApp\Exception\ErkinAppException $e) {
}
