<?php

namespace Enjelly\Tests\OfficialAccount\Sso;

use Enjelly\Kernel\ServiceContainer;
use Enjelly\OfficialAccount\Sso\Client;
use Enjelly\Tests\TestCase;

/**
 * ClientTest
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class ClientTest extends TestCase
{
    public function testGetUserInfo()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('sso/getuserinfo', [
            'code' => '123456'
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->getUserInfo('123456'));
    }
}