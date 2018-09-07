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

use Enjelly\Kernel\Messages\News;
use Enjelly\Kernel\Messages\NewsItem;
use Enjelly\Tests\TestCase;

class NewsTest extends TestCase
{
    public function testTransformToJsonRequest()
    {
        $group = new News([
            new NewsItem([
                'title' => 'Enjelly 4.0 发布了',
                'description' => 'Enjelly 4.0 于今天发布了',
                'url' => 'http://Enjelly.com/blog/4.0-released.html',
                'image' => 'http://img01.Enjelly.com/4.0.jpg',
            ]),
            new NewsItem([
                'title' => 'Enjelly 4.0 入门指南',
                'description' => 'Enjelly 4.0 于今天发布了，来看看新版用法',
                'url' => 'http://Enjelly.com/blog/4.0-tutorial.html',
                'image' => 'http://img01.Enjelly.com/4.0-tutorial.jpg',
            ]),
        ]);

        $this->assertSame([
            'msgtype' => 'news',
            'news' => [
                'articles' => [
                    [
                        'title' => 'Enjelly 4.0 发布了',
                        'description' => 'Enjelly 4.0 于今天发布了',
                        'url' => 'http://Enjelly.com/blog/4.0-released.html',
                        'picurl' => 'http://img01.Enjelly.com/4.0.jpg',
                    ],
                    [
                        'title' => 'Enjelly 4.0 入门指南',
                        'description' => 'Enjelly 4.0 于今天发布了，来看看新版用法',
                        'url' => 'http://Enjelly.com/blog/4.0-tutorial.html',
                        'picurl' => 'http://img01.Enjelly.com/4.0-tutorial.jpg',
                    ],
                ],
            ],
        ], $group->transformForJsonRequest());
    }

    public function testToXmlArray()
    {
        $group = new News([
            new NewsItem([
                'title' => 'Enjelly 4.0 发布了',
                'description' => 'Enjelly 4.0 于今天发布了',
                'url' => 'http://Enjelly.com/blog/4.0-released.html',
                'image' => 'http://img01.Enjelly.com/4.0.jpg',
            ]),
            new NewsItem([
                'title' => 'Enjelly 4.0 入门指南',
                'description' => 'Enjelly 4.0 于今天发布了，来看看新版用法',
                'url' => 'http://Enjelly.com/blog/4.0-tutorial.html',
                'image' => 'http://img01.Enjelly.com/4.0-tutorial.jpg',
            ]),
        ]);

        $this->assertSame([
            'ArticleCount' => 2,
            'Articles' => [
                [
                    'Title' => 'Enjelly 4.0 发布了',
                    'Description' => 'Enjelly 4.0 于今天发布了',
                    'Url' => 'http://Enjelly.com/blog/4.0-released.html',
                    'PicUrl' => 'http://img01.Enjelly.com/4.0.jpg',
                ],
                [
                    'Title' => 'Enjelly 4.0 入门指南',
                    'Description' => 'Enjelly 4.0 于今天发布了，来看看新版用法',
                    'Url' => 'http://Enjelly.com/blog/4.0-tutorial.html',
                    'PicUrl' => 'http://img01.Enjelly.com/4.0-tutorial.jpg',
                ],
            ],
        ], $group->toXmlArray());
    }
}
