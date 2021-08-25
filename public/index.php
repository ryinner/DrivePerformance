<?php

use Ryinner\DrivePerformance\Application as DrivePerformanceApplication;

error_reporting(E_ALL);
$rootPath = dirname(__DIR__);

try {
    require_once $rootPath . '/vendor/autoload.php';

    Dotenv\Dotenv::create($rootPath)->load();

    /**
     * Start DrivePerformance
     */
    echo (new DrivePerformanceApplication($rootPath))->run();

} catch (Exception $e){
    echo $e->getMessage(), '<br>';
    echo nl2br(htmlentities($e->getTraceAsString()));
}