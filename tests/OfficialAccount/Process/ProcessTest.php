<?php

namespace Enjelly\Tests\OfficialAccount\Process;

use Enjelly\OfficialAccount\Application;
use Enjelly\Kernel\ServiceContainer;
use Enjelly\OfficialAccount\Process\Process;
use Enjelly\OfficialAccount\Process\Client;
use Enjelly\Tests\TestCase;

/**
 * ClientTest
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class ProcessTest extends TestCase
{
    public function testBasicProperties()
    {
        $app = new Application();
        $process = new Process($app);

        $this->assertInstanceOf(Client::class, $process);

        try {
            $process->foo;
            $this->fail('No expected exception thrown.');
        } catch (\Exception $e) {
            $this->assertSame('No process service named "foo".', $e->getMessage());
        }
    }
}