<?php

namespace Ryinner\DrivePerformance\Providers;

use Phalcon\Di\DiInterface;
use Phalcon\Di\ServiceProviderInterface;
use Phalcon\Assets\Manager;

class AssetsProvider implements ServiceProviderInterface
{
    protected const VERSION = "1.0.0";
    /**
     * @var string
     */
    protected $providerName = 'assets';

    /**
     * @param DiInterface $di
     *
     * @return void
     */
    public function register(DiInterface $di): void
    {
        $assetManager = new Manager();

        $di->setShared($this->providerName, function () use ($assetManager) {

            $assetManager->collection('css')
                ->addCss('css/main.css')
                ->addCss('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap',false);

            $assetManager->collection('js')
                ->addJs('js/main.js');
            return $assetManager;
        });
    }
}