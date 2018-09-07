<?php

/*
 * This file is part of the havenshen/dingtalk.
 *
 * (c) Haven Shen <havenshen@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Enjelly\Tests\Kernel\Messages;

use Enjelly\Kernel\Messages\Voice;
use Enjelly\Tests\TestCase;

class VoiceTest extends TestCase
{
    public function testToXmlArray()
    {
        $message = new Voice('mock-media-id');

        $this->assertSame([
            'Voice' => [
                'MediaId' => 'mock-media-id',
            ],
        ], $message->toXmlArray());
    }
}
