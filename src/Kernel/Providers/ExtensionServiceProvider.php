<?php

/*
 * This file is part of the havenshen/dingtalk.
 *
 * (c) Haven Shen <havenshen@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Enjelly\Kernel\Providers;

use EnjellyComposer\Extension;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ExtensionServiceProvider.
 *
 * @author Haven Shen <havenshen@gmail.com>
 */
class ExtensionServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple A container instance
     */
    public function register(Container $pimple)
    {
        $pimple['extension'] = function ($app) {
            return new Extension($app);
        };
    }
}
