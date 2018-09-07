<?php

/*
 * This file is part of the havenshen/dingtalk.
 *
 * (c) Haven Shen <havenshen@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Enjelly\Tests\Kernel\Support;

use Enjelly\Kernel\Contracts\Arrayable;
use Enjelly\Kernel\Support\ArrayAccessible;
use Enjelly\Tests\TestCase;

class ArrayAccessibleTest extends TestCase
{
    public function testBasicFeatures()
    {
        $array = ['name' => 'overtrue', 'age' => 18];
        $a = new ArrayAccessible($array);

        $this->assertInstanceOf(\ArrayAccess::class, $a);
        $this->assertInstanceOf(\IteratorAggregate::class, $a);
        $this->assertInstanceOf(Arrayable::class, $a);

        $this->assertTrue(isset($a['name']));
        $this->assertTrue(isset($a['age']));
        $this->assertFalse(isset($a['height']));
        $this->assertSame('overtrue', $a['name']);

        $this->assertSame($array, $a->toArray());
        $this->assertSame($array, $a->getIterator()->getArrayCopy());

        unset($a['age']);
        $this->assertFalse(isset($a['age']));
        $a['age'] = 27;
        $this->assertSame(27, $a['age']);

        $a[] = ['name' => 'somebody'];
        $this->assertArrayHasKey(0, $a->toArray());
        $this->assertSame(['name' => 'somebody'], $a->toArray()[0]);
    }
}
