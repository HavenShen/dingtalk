<?php

/*
 * This file is part of the havenshen/dingtalk.
 *
 * (c) Haven Shen <havenshen@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Enjelly\Kernel\Messages;

/**
 * Class Image.
 *
 * @property string $media_id
 */
class Image extends Media
{
    /**
     * Messages type.
     *
     * @var string
     */
    protected $type = 'image';
}
