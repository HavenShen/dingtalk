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

use Enjelly\Kernel\Messages\NewsItem;
use Enjelly\Tests\TestCase;

class NewsItemTest extends TestCase
{
    public function testToXmlArray()
    {
        $message = new NewsItem([
                'title' => 'Enjelly 4.0 发布了',
                'description' => 'Enjelly 4.0 于今天发布了',
                'url' => 'http://Enjelly.com/blog/4.0-released.html',
                'image' => 'http://img01.Enjelly.com/4.0.jpg',
            ]);

        $this->assertSame([
            'Title' => 'Enjelly 4.0 发布了',
            'Description' => 'Enjelly 4.0 于今天发布了',
            'Url' => 'http://Enjelly.com/blog/4.0-released.html',
            'PicUrl' => 'http://img01.Enjelly.com/4.0.jpg',
        ], $message->toXmlArray());
    }
}
