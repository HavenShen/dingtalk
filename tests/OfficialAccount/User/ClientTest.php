<?php

namespace Enjelly\Tests\OfficialAccount\User;

use Enjelly\Kernel\ServiceContainer;
use Enjelly\OfficialAccount\User\Client;
use Enjelly\Tests\TestCase;

/**
 * ClientTest
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class ClientTest extends TestCase
{
    public function testGet()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('user/get', [
            'userid' => 1,
            'lang' => 'zh_CN'
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->get(1));
    }

    public function testGetDeptMember()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('user/getDeptMember', [
            'deptId' => 1
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->getDeptMember(1));
    }

    public function testSimpleList()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('user/simplelist', [
            'department_id' => 1,
            'lang' => 'zh_CN',
            'offset' => 1,
            'size' => 1,
            'order' => '123456'
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->simpleList(1, 'zh_CN', 1, 1, '123456'));
    }

    public function testList()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('user/list', [
            'department_id' => 1,
            'lang' => 'zh_CN',
            'offset' => 1,
            'size' => 1,
            'order' => '123456'
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->list(1, 'zh_CN', 1, 1, '123456'));
    }

    public function testGetAdmin()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('user/get_admin', [
            //
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->getAdmin());
    }

    public function testCanAccessMicroapp()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('user/can_access_microapp', [
            'appId' => '123456',
            'userId' => '1'
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->canAccessMicroapp('123456', '1'));
    }

    public function testGetUseridByUnionid()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('user/getUseridByUnionid', [
            'unionid' => '123456'
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->getUseridByUnionid('123456'));
    }

    public function testGetUserInfo()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('user/getuserinfo', [
            'code' => '123456'
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->getUserInfo('123456'));
    }
}