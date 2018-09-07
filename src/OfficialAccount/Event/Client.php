<?php

namespace Enjelly\OfficialAccount\Event;

use Enjelly\Kernel\BaseClient;

/**
 * Class Client
 *
 * https://open-doc.dingtalk.com/microapp/serverapi2/lo5n6i
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class Client extends BaseClient
{
    /**
     * 注册钉钉回调
     *
     * @param  array $callBackTag
     * @param  string $token
     * @param  string $aesKey
     * @param  string $url
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function registerCallBack(array $callBackTag, string $token, string $aesKey, string $url)
    {
        $params = [
            'call_back_tag' => $callBackTag,
            'token' => $token,
            'aes_key' => $aesKey,
            'url' => $url,
        ];

        return $this->httpPostJson('call_back/register_call_back', $params);
    }

    /**
     * 获取回调列表
     *
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function getCallBack()
    {
        $params = [
            //
        ];

        return $this->httpGet('call_back/get_call_back', $params);
    }

    /**
     * 更新回调
     *
     * @param  array $callBackTag
     * @param  string $token
     * @param  string $aesKey
     * @param  string $url
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function updateCallBack(array $callBackTag, string $token, string $aesKey, string $url)
    {
        $params = [
            'call_back_tag' => $callBackTag,
            'token' => $token,
            'aes_key' => $aesKey,
            'url' => $url,
        ];

        return $this->httpPostJson('call_back/update_call_back', $params);
    }

    /**
     * 删除回调
     *
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function deleteCallBack()
    {
        $params = [
            //
        ];

        return $this->httpGet('call_back/delete_call_back', $params);
    }

    /**
     * 获取失败回调结果
     *
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function getCallBackFailedResult()
    {
        $params = [
            //
        ];

        return $this->httpGet('call_back/get_call_back_failed_result', $params);
    }
}