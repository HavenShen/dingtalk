<?php

namespace Enjelly\OfficialAccount\Process;

use Enjelly\Kernel\BaseClient;

/**
 * Class Client
 *
 * https://open-doc.dingtalk.com/microapp/serverapi2/ca8r99
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class Client extends BaseClient
{
    /**
     * 发起审批
     *
     * @param  array $attributes
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function create(array $attributes)
    {
        $params = $attributes;

        return $this->httpPost('topapi/processinstance/create', $params);
    }
}