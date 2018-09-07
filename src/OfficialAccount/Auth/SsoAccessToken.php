<?php

namespace Enjelly\OfficialAccount\Auth;

use Enjelly\Kernel\SsoAccessToken as BaseAccessToken;

/**
 * Class AuthorizerAccessToken.
 *
 * @author Haven Shen <havenshen@gmail.com>
 */
class SsoAccessToken extends BaseAccessToken
{
    /**
     * @var string
     */
    protected $endpointToGetToken = 'https://oapi.dingtalk.com/sso/gettoken';

    /**
     * @return array
     */
    protected function getCredentials(): array
    {
        return [
            'corpid' => $this->app['config']['corpid'],
            'corpsecret' => $this->app['config']['ssosecret'],
        ];
    }
}
