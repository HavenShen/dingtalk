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
use Enjelly\OfficialAccount\Auth\AccessToken;
use Enjelly\Tests\TestCase;

class AccessTokenTest extends TestCase
{
    public function testGetCredentials()
    {
        $app = new ServiceContainer([
            'corpid' => '123456asdfgh',
            'corpsecret' => 'asdfgh123456',
        ]);
        $token = \Mockery::mock(AccessToken::class, [$app])->makePartial()->shouldAllowMockingProtectedMethods();

        $this->assertSame([
            'corpid' => '123456asdfgh',
            'corpsecret' => 'asdfgh123456',
        ], $token->getCredentials());
    }
}
