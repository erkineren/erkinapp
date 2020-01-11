<?php

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\ORM\Tools\Setup;
use ErkinApp\Container;
use Phinx\Config\Config;
use Phinx\Migration\Manager;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\NullOutput;

return function () {
    $container = ErkinApp()->Container();

    $container[EntityManager::class] = function (Container $c) {

        // Create a simple "default" Doctrine ORM configuration for Annotations
        $isDevMode = true;
        $paths = [MODEL_PATH];
        $config = Setup::createConfiguration($isDevMode);
        $driver = new AnnotationDriver(new AnnotationReader(), $paths);
//        AnnotationRegistry::registerLoader('class_exists');
        $config->setMetadataDriverImpl($driver);

        $conn = array(
            'pdo' => ErkinApp()->DB('default')
//            'driver' => 'pdo_mysql',
//            'user'     => 'root',
//            'password' => '',
//            'dbname'   => 'foo',
//            'host'   => 'localhost',
        );


        return EntityManager::create($conn, $config);
    };

    $container[Manager::class] = function (Container $c) {
        return new Manager(new Config(ErkinApp()->Config()->get('phinx')), new StringInput(''), new NullOutput());
    };


};