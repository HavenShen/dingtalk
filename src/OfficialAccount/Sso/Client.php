<?php

namespace Enjelly\OfficialAccount\Sso;

use Enjelly\Kernel\BaseClient;

/**
 * Class Client
 *
 * https://open-doc.dingtalk.com/microapp/serverapi2/xswxhg
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class Client extends BaseClient
{
    protected $accessTokenMiddleware = 'sso_access_token';

    public function getUserInfo(string $code)
    {
        $params = [
            'code' => $code,
        ];

        return $this->httpGet('sso/getuserinfo', $params);
    }
}