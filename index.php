<?php


use Doctrine\Common\Annotations\AnnotationRegistry;
use function ErkinApp\Helpers\handleApp;

ini_set('max_execution_time', 60 * 60 * 24);
ini_set('memory_limit', '-1');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('BASE_PATH', __DIR__);
define('APP_PATH', BASE_PATH . '/app');
define('LANGUAGE_PATH', BASE_PATH . '/languages');

require_once APP_PATH . '/config.php';
$loader = require BASE_PATH . '/vendor/autoload.php';

AnnotationRegistry::registerLoader('class_exists');

try {
    handleApp();
} catch (\ErkinApp\Exceptions\ErkinAppException $e) {
}
