<?php

use Ryinner\DrivePerformance\Providers\ConfigProvider;
use Ryinner\DrivePerformance\Providers\DbProvider;
use Ryinner\DrivePerformance\Providers\DispatcherProvider;
use Ryinner\DrivePerformance\Providers\ViewProvider;

/**
 * Providers for di
 */

return [
    ConfigProvider::class,
    DispatcherProvider::class,
    DbProvider::class,
    ViewProvider::class,
];