<?php

namespace Enjelly\OfficialAccount\Auth;

use Enjelly\Kernel\SnsAccessToken as BaseAccessToken;

/**
 * Class AuthorizerAccessToken.
 *
 * @author Haven Shen <havenshen@gmail.com>
 */
class SnsAccessToken extends BaseAccessToken
{
    /**
     * @var string
     */
    protected $endpointToGetToken = 'https://oapi.dingtalk.com/sns/gettoken';

    protected $endpointToSnsOAuth = 'https://oapi.dingtalk.com/connect/oauth2/sns_authorize?appid=%s&response_type=code&scope=snsapi_login&state=%s&redirect_uri=%s';

    /**
     * @return array
     */
    protected function getCredentials(): array
    {
        return [
            'appid' => $this->app['config']['appid'],
            'appsecret' => $this->app['config']['appsecret'],
        ];
    }

    protected function getOAuthCredentials(): array
    {
        return [
            $this->app['config']['appid'],
            $this->app['config']['oauth']['sns']['state'],
            $this->app['config']['oauth']['sns']['redirect']
        ];
    }
}
