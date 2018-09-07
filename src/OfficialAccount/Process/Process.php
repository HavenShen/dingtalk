<?php

namespace Enjelly\OfficialAccount\Process;

use Enjelly\Kernel\Exceptions\InvalidArgumentException;

/**
 * Class ProcessModel
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class Process extends Client
{
    /**
     * @param string $property
     *
     * @return mixed
     *
     * @throws \Enjelly\Kernel\Exceptions\InvalidArgumentException
     */
    public function __get($property)
    {
        if (isset($this->app["process.{$property}"])) {
            return $this->app["process.{$property}"];
        }
        throw new InvalidArgumentException(sprintf('No process service named "%s".', $property));
    }
}