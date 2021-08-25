<?php

use Ryinner\DrivePerformance\Providers\AssetsProvider;
use Ryinner\DrivePerformance\Providers\ConfigProvider;
use Ryinner\DrivePerformance\Providers\DbProvider;
use Ryinner\DrivePerformance\Providers\DispatcherProvider;
use Ryinner\DrivePerformance\Providers\LoggerProvider;
use Ryinner\DrivePerformance\Providers\ModelsMetadataProvider;
use Ryinner\DrivePerformance\Providers\RouterProvider;
use Ryinner\DrivePerformance\Providers\SessionProvider;
use Ryinner\DrivePerformance\Providers\ViewProvider;

/**
 * Providers for di
 */

return [
    ConfigProvider::class,
    DispatcherProvider::class,
    AssetsProvider::class,
    DbProvider::class,
    LoggerProvider::class,
    ModelsMetadataProvider::class,
    RouterProvider::class,
    SessionProvider::class,
    ViewProvider::class,
];