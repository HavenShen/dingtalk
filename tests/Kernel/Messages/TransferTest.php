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

use Enjelly\Kernel\Messages\Transfer;
use Enjelly\Tests\TestCase;

class TransferTest extends TestCase
{
    public function testToXmlArray()
    {
        $message = new Transfer();
        $this->assertSame([], $message->toXmlArray());

        $message = new Transfer('overtrue@test');
        $this->assertSame([
            'TransInfo' => [
                'KfAccount' => 'overtrue@test',
            ],
        ], $message->toXmlArray());
    }
}
