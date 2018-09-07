<?php

namespace Enjelly\Tests\OfficialAccount\Department;

use Enjelly\Kernel\ServiceContainer;
use Enjelly\OfficialAccount\Department\Client;
use Enjelly\Tests\TestCase;

/**
 * ClientTest
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class ClientTest extends TestCase
{
    public function testListIds()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('department/list_ids', [
            'id' => 1
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->listIds(1));
    }

    public function testList()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('department/list', [
            'lang' => 'zh_CN',
            'fetch_child' => null,
            'id' => 1
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->list());
    }

    public function testGet()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('department/get', [
            'id' => 1
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->get());
    }

    public function testListParentDeptsByDept()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('department/list_parent_depts_by_dept', [
            'id' => 1
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->listParentDeptsByDept(1));
    }

    public function testListParentDeptsByUserId()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('department/list_parent_depts', [
            'userId' => 1
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->listParentDeptsByUserId(1));
    }

    public function testGetOrgUserCount()
    {
        $client = $this->mockApiClient(Client::class);

        $client->expects()->httpGet('user/get_org_user_count', [
            'onlyActive' => 0
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->getOrgUserCount());
    }
}
