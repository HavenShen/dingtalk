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

use Enjelly\Kernel\Messages\Article;
use Enjelly\Tests\TestCase;

class ArticleTest extends TestCase
{
    public function testGetMediaId()
    {
        $article = new Article(
            [
                'thumb_media_id' => 'mock-thumb_media_id',
                'author' => 'mock-author',
                'title' => 'mock-title',
                'content' => 'mock-content',
                'digest' => 'mock-digest',
                'source_url' => 'mock-source_url',
                'show_cover' => 'mock-show_cover',
            ]
        );
        $this->assertSame('mpnews', $article->getType());
        $this->assertSame([
            'msgtype' => 'mpnews',
            'mpnews' => [
                'thumb_media_id' => 'mock-thumb_media_id',
                'author' => 'mock-author',
                'title' => 'mock-title',
                'content' => 'mock-content',
                'digest' => 'mock-digest',
                'content_source_url' => 'mock-source_url',
                'show_cover_pic' => 'mock-show_cover',
            ],
        ], $article->transformForJsonRequest());
    }
}
