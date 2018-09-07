<?php

namespace Enjelly\OfficialAccount\Process;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        $app['process'] = function ($app) {
            return new Process($app);
        };

        $app['process_client'] = function ($app) {
            return new Client($app);
        };
    }
}
