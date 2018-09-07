<?php

namespace Enjelly\Tests\OfficialAccount\Role;

use Enjelly\Kernel\ServiceContainer;
use Enjelly\OfficialAccount\Role\Client;
use Enjelly\Tests\TestCase;

/**
 * ClientTest
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class ClientTest extends TestCase
{
    public function testList()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('topapi/role/list', [
            'size' => 1,
            'offset' => 0
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->list(1, 0));
    }

    public function testSimpleList()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('topapi/role/simplelist', [
            'role_id' => 1,
            'size' => 1,
            'offset' => 0
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->simpleList(1, 1, 0));
    }

    public function testGetRoleGroup()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('topapi/role/getrolegroup', [
            'group_id' => 1
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->getRoleGroup(1));
    }

    public function testGetRole()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('topapi/role/getrole', [
            'roleId' => 1
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->getRole(1));
    }
}