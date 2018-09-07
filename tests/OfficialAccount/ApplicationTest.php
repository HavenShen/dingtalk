<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) Haven Shen <havenshen@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Enjelly\Tests\OfficialAccount;

use Enjelly\OfficialAccount\Application;
use Enjelly\Tests\TestCase;

class ApplicationTest extends TestCase
{
    public function testProperties()
    {
        $app = new Application();

        $this->assertInstanceOf(\Enjelly\OfficialAccount\Auth\AccessToken::class, $app->access_token);
        $this->assertInstanceOf(\Enjelly\OfficialAccount\Auth\SnsAccessToken::class, $app->sns_access_token);
        $this->assertInstanceOf(\Enjelly\OfficialAccount\Auth\SsoAccessToken::class, $app->sso_access_token);
        $this->assertInstanceOf(\Enjelly\OfficialAccount\Department\Client::class, $app->department);
        $this->assertInstanceOf(\Enjelly\OfficialAccount\Event\Client::class, $app->event);
        $this->assertInstanceOf(\Enjelly\OfficialAccount\Process\Client::class, $app->process_client);
        $this->assertInstanceOf(\Enjelly\OfficialAccount\Process\Process::class, $app->process);
        $this->assertInstanceOf(\Enjelly\OfficialAccount\Role\Client::class, $app->role);
        $this->assertInstanceOf(\Enjelly\OfficialAccount\Sns\Client::class, $app->sns);
        $this->assertInstanceOf(\Enjelly\OfficialAccount\Sso\Client::class, $app->sso);
        $this->assertInstanceOf(\Enjelly\OfficialAccount\User\Client::class, $app->user);
    }
}
