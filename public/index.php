<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use function ErkinApp\Helpers\handleApp;

require dirname(__DIR__) . '/vendor/autoload.php';

try {
    AnnotationRegistry::registerLoader('class_exists');
    handleApp();
} catch (\ErkinApp\Exception\ErkinAppException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}
