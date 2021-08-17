<?php

use Phalcon\Mvc\Micro\Collection;
use Phalcon\Mvc\Micro;
use Phalcon\DI\FactoryDefault;
use Phalcon\Db\Adapter\Pdo\Mysql as Database;

try{
    $rootPath = dirname(__DIR__);
    require_once $rootPath . '/vendor/autoload.php';
    /**
     * Read the configuration
     */
    $config = include $rootPath . '../../config/config.php';

    $app = new Micro();

    $di = new FactoryDefault();

    $di->set('db', function () use ($config) {
        return new Database(
            [
                "host"     => $config->database->host,
                "username" => $config->database->username,
                "password" => $config->database->password,
                "dbname"   => $config->database->name
            ]
        );
    });

     /**
     * Example how to work with
     */

    // $categories = new Collection();

    // $categories->setHandler(
    //     new Api\Controllers\CategoriesController()
    // )
    //     ->setPrefix('/categories');

    // $categories->get("/", "index");
    // $categories->get("/goods/{id}","goods");
    // $app->mount($categories);

    // $goods = new Collection();
    // $goods->setHandler(
    //     new Api\Controllers\GoodsController()
    // )
    //     ->setPrefix('/goods')
    //     ->get("/{id}","good");
    // $app->mount($goods);

    // $app->handle($_SERVER['REQUEST_URI']);

} catch (\Exception $e) {
    echo $e->getMessage(), PHP_EOL;
    echo $e->getTraceAsString();
}