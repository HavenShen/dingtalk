<?php

namespace Enjelly\Tests\OfficialAccount\Event;

use Enjelly\Kernel\ServiceContainer;
use Enjelly\OfficialAccount\Event\Client;
use Enjelly\Tests\TestCase;

/**
 * ClientTest
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class ClientTest extends TestCase
{
    public function testRegisterCallBack()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpPostJson('call_back/register_call_back', [
            'call_back_tag' => ['some_tag'],
            'token' => '123456',
            'aes_key' => '11111111111111111111111111111111111111111',
            'url' => 'http://enjelly.com',
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->registerCallBack(['some_tag'], '123456', '11111111111111111111111111111111111111111', 'http://enjelly.com'));
    }

    public function testGetCallBack()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('call_back/get_call_back', [
            //
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->getCallBack());
    }

    public function testUpdateCallBack()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpPostJson('call_back/update_call_back', [
            'call_back_tag' => ['some_tag'],
            'token' => '123456',
            'aes_key' => '11111111111111111111111111111111111111111',
            'url' => 'http://enjelly.com',
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->updateCallBack(['some_tag'], '123456', '11111111111111111111111111111111111111111', 'http://enjelly.com'));
    }

    public function testDeleteCallBack()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('call_back/delete_call_back', [
            //
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->deleteCallBack());
    }

    public function testGetCallBackFailedResult()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('call_back/get_call_back_failed_result', [
            //
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->getCallBackFailedResult());
    }
}