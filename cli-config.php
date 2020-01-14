<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\ORM\EntityManager;

$loader = require __DIR__ . '/vendor/autoload.php';

AnnotationRegistry::registerLoader('class_exists');

$em = ErkinApp()->Get(EntityManager::class);

return new \Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));