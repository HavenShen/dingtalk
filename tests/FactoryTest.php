<?php

/*
 * This file is part of the havenshen/dingtalk.
 *
 * (c) Haven Shen <havenshen@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Enjelly\Tests;

use Enjelly\Factory;

class FactoryTest extends TestCase
{
    public function testStaticCall()
    {
        $officialAccount = Factory::officialAccount([
            'corpid' => '123456asdfgh',
            'corpsecret' => 'asdfgh123456'
        ]);

        var_dump($officialAccount->access_token->getToken());die;

        $officialAccountFromMake = Factory::make('officialAccount', [
            'app_id' => 'corpid@123',
        ]);

        $this->assertInstanceOf(\Enjelly\OfficialAccount\Application::class, $officialAccount);
        $this->assertInstanceOf(\Enjelly\OfficialAccount\Application::class, $officialAccountFromMake);

        $expected = [
            'app_id' => 'corpid@123',
        ];
        $this->assertArraySubset($expected, $officialAccount['config']->all());
        $this->assertArraySubset($expected, $officialAccountFromMake['config']->all());

        $this->assertInstanceOf(
            \Enjelly\OfficialAccount\Application::class,
            Factory::officialAccount(['appid' => 'appid@456'])
        );

        $this->assertInstanceOf(
            \Enjelly\OpenPlatform\Application::class,
            Factory::openPlatform(['appid' => 'appid@789'])
        );

        $this->assertInstanceOf(
            \Enjelly\MiniProgram\Application::class,
            Factory::miniProgram(['appid' => 'appid@789'])
        );

        $this->assertInstanceOf(
            \Enjelly\Payment\Application::class,
            Factory::payment(['appid' => 'appid@789'])
        );

        $this->assertInstanceOf(
            \Enjelly\BasicService\Application::class,
            Factory::basicService(['appid' => 'appid@789'])
        );

        $this->assertInstanceOf(
            \Enjelly\Work\Application::class,
            Factory::work(['appid' => 'appid@789'])
        );
    }
}
