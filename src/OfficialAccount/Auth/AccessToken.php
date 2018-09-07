<?php

namespace Enjelly\OfficialAccount\Auth;

use Enjelly\Kernel\AccessToken as BaseAccessToken;

/**
 * Class AuthorizerAccessToken.
 *
 * @author Haven Shen <havenshen@gmail.com>
 */
class AccessToken extends BaseAccessToken
{
    /**
     * @var string
     */
    protected $endpointToGetToken = 'https://oapi.dingtalk.com/gettoken';

    /**
     * @return array
     */
    protected function getCredentials(): array
    {
        return [
            'corpid' => $this->app['config']['corpid'],
            'corpsecret' => $this->app['config']['corpsecret'],
        ];
    }
}
