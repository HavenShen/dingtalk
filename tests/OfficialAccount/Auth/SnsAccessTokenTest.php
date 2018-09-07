<?php

/*
 * This file is part of the havenshen/dingtalk.
 *
 * (c) Haven Shen <havenshen@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Enjelly\Tests\OfficialAccount\Auth;

use Enjelly\Kernel\ServiceContainer;
use Enjelly\OfficialAccount\Auth\SnsAccessToken;
use Enjelly\Tests\TestCase;

class SnsAccessTokenTest extends TestCase
{
    public function testGetCredentials()
    {
        $app = new ServiceContainer([
            'appid' => '123456asdfgh',
            'appsecret' => 'asdfgh123456',
        ]);
        $token = \Mockery::mock(SnsAccessToken::class, [$app])->makePartial()->shouldAllowMockingProtectedMethods();

        $this->assertSame([
            'appid' => '123456asdfgh',
            'appsecret' => 'asdfgh123456',
        ], $token->getCredentials());
    }
}
