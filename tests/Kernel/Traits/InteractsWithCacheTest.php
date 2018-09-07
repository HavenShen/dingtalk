<?php

/*
 * This file is part of the havenshen/dingtalk.
 *
 * (c) Haven Shen <havenshen@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Enjelly\Tests\Kernel\Traits;

use Enjelly\Kernel\Traits\InteractsWithCache;
use Enjelly\Tests\TestCase;
use Psr\SimpleCache\CacheInterface;

class InteractsWithCacheTest extends TestCase
{
    public function testBasicFeatures()
    {
        $cls = \Mockery::mock(InteractsWithCache::class);
        $this->assertInstanceOf(CacheInterface::class, $cls->getCache());

        $cache = \Mockery::mock(CacheInterface::class);
        $cls->setCache($cache);
        $this->assertSame($cache, $cls->getCache());
    }
}
