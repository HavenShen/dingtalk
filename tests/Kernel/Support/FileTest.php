<?php

/*
 * This file is part of the havenshen/dingtalk.
 *
 * (c) Haven Shen <havenshen@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Enjelly\Test\Kernel\Support;

use Enjelly\Kernel\Support\File;
use Enjelly\Tests\TestCase;

class FileTest extends TestCase
{
    public function testGetStreamExt()
    {
        $this->assertSame('.png', File::getStreamExt(file_get_contents(STUBS_ROOT.'/files/image.png')));
        $this->assertSame('.png', File::getStreamExt(STUBS_ROOT.'/files/image.png'));

        $this->assertSame('.png', File::getExtBySignature(file_get_contents(STUBS_ROOT.'/files/image.png')));

        $this->assertSame('.jpg', File::getExtBySignature(file_get_contents(STUBS_ROOT.'/files/image.jpg')));

        $this->assertSame('', File::getExtBySignature(file_get_contents(STUBS_ROOT.'/files/empty.file')));
    }
}
