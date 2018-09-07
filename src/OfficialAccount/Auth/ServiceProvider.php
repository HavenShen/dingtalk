<?php

/*
 * This file is part of the havenshen/dingtalk.
 *
 * (c) Haven Shen <havenshen@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Enjelly\OfficialAccount\Auth;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider.
 *
 * @author Haven Shen <havenshen@gmail.com>
 */
class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        !isset($app['access_token']) && $app['access_token'] = function ($app) {
            return new AccessToken($app);
        };

        !isset($app['sns_access_token']) && $app['sns_access_token'] = function ($app) {
            return new SnsAccessToken($app);
        };

        !isset($app['sso_access_token']) && $app['sso_access_token'] = function ($app) {
            return new SsoAccessToken($app);
        };
    }
}
