<?php

namespace Enjelly\Tests\OfficialAccount\Sns;

use Enjelly\Kernel\ServiceContainer;
use Enjelly\OfficialAccount\Sns\Client;
use Enjelly\Tests\TestCase;

/**
 * ClientTest
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class ClientTest extends TestCase
{
    public function testGetToken()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('sns/gettoken', [
            'appid' => '123456',
            'appsecret' => '654321'
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->getToken('123456', '654321'));
    }

    public function testGetPersistentCode()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpPostJson('sns/get_persistent_code', [
            'tmp_auth_code' => '123456'
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->getPersistentCode('123456'));
    }

    public function testGetSnsToken()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpPostJson('sns/get_sns_token', [
            'openid' => '123456',
            'persistent_code' => '654321'
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->getSnsToken('123456', '654321'));
    }

    public function testGetUserInfo()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('sns/getuserinfo', [
            'sns_token' => '123456'
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->getUserInfo('123456'));
    }
}