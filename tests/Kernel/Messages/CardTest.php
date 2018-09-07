<?php

/*
 * This file is part of the havenshen/dingtalk.
 *
 * (c) Haven Shen <havenshen@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Enjelly\Test\Kernel\Messages;

use Enjelly\Kernel\Messages\Card;
use Enjelly\Tests\TestCase;

class CardTest extends TestCase
{
    public function testBasicFeatures()
    {
        $card = new Card('mock-card-id');

        $this->assertSame('mock-card-id', $card->card_id);
    }
}
