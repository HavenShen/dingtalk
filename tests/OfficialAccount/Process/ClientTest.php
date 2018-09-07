<?php

namespace Enjelly\Tests\OfficialAccount\Process;

use Enjelly\Kernel\ServiceContainer;
use Enjelly\OfficialAccount\Process\Client;
use Enjelly\Tests\TestCase;

/**
 * ClientTest
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class ClientTest extends TestCase
{

    public function testCreate()
    {
        $client = $this->mockApiClient(Client::class);

        $attributes = [
            'agent_id' => 41605932,
            'process_code' => 'PROC-EF6YJL35',
            'originator_user_id' => 'manager432',
            'dept_id' => 100,
            'approvers' => [
                't121121212112'
            ],
            'cc_list' => [
                't121121212112'
            ],
            'cc_position' => 'START',
            'form_component_values' => [
                ['name' => '项目 ID', 'value' => '1', 'ext_value' => 'total: 1'],
                ['name' => '项目 名称', 'value' => 'first', 'ext_value' => 'total: 2']
            ],
        ];

        $client->expects()->httpPost('topapi/processinstance/create', [
            $params = $attributes
        ])->andReturn('mock-result')->once();

        $this->assertSame('mock-result', $client->create([$attributes]));
    }


}