<?php

/*
 * This file is part of the havenshen/dingtalk.
 *
 * (c) Haven Shen <havenshen@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Enjelly\OfficialAccount;

use Enjelly\BasicService;
use Enjelly\Kernel\ServiceContainer;

/**
 * Class Application
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Auth\ServiceProvider::class,
        Department\ServiceProvider::class,
        User\ServiceProvider::class,
        Role\ServiceProvider::class,
        Sns\ServiceProvider::class,
        Sso\ServiceProvider::class,
        Process\ServiceProvider::class,
        Event\ServiceProvider::class,
    ];
}
