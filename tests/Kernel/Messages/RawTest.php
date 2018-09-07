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

use Enjelly\Kernel\Messages\Raw;
use Enjelly\Tests\TestCase;

class RawTest extends TestCase
{
    public function testBasicFeatures()
    {
        $content = '<xml><foo>foo</foo></xml>';
        $raw = new Raw($content);

        $this->assertSame($content, $raw->content);

        $this->assertSame($content, strval($raw));
    }
}
