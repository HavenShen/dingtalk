<?php

namespace Enjelly\OfficialAccount\Sns;

use Enjelly\Kernel\BaseClient;

/**
 * Class Client
 *
 * https://open-doc.dingtalk.com/microapp/serverapi2/athq8o
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class Client extends BaseClient
{
    protected $accessTokenMiddleware = 'sns_access_token';

    /**
     * 获取钉钉开放应用的 ACCESS_TOKEN
     *
     * @param  string $appId
     * @param  string $appSecret
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function getToken(string $appid, string $appsecret)
    {
        $params = [
            'appid' => $appid,
            'appsecret' => $appsecret
        ];

        return $this->httpGet('sns/gettoken', $params);
    }

    /**
     * 获取用户授权的持久授权码
     *
     * @param  string $tmpAuthCode
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function getPersistentCode(string $tmpAuthCode)
    {
        $params = [
            'tmp_auth_code' => $tmpAuthCode
        ];

        return $this->httpPostJson('sns/get_persistent_code', $params);
    }

    /**
     * @param  string $openId
     * @param  string $persistentCode
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function getSnsToken(string $openId, string $persistentCode)
    {
        $params = [
            'openid' => $openId,
            'persistent_code' => $persistentCode
        ];

        return $this->httpPostJson('sns/get_sns_token', $params);
    }

    /**
     * @param  string $snsToken
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function getUserInfo(string $snsToken)
    {
        $params = [
            'sns_token' => $snsToken
        ];

        return $this->httpGet('sns/getuserinfo', $params);
    }
}