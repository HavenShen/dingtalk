<?php

namespace Enjelly\OfficialAccount\Role;

use Enjelly\Kernel\BaseClient;

/**
 * Class Client
 *
 * https://open-doc.dingtalk.com/microapp/serverapi2/dnu5l1
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class Client extends BaseClient
{
    /**
     * 获取企业角色列表
     *
     * @param  int|integer $size
     * @param  int|integer $offset
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function list(int $size = 20, int $offset = 0)
    {
        $params = [
            'size' => $size,
            'offset' => $offset
        ];

        return $this->httpGet('topapi/role/list', $params);
    }

    /**
     * 获取企业中角色下的员工列表
     *
     * @param  int $roleId
     * @param  int|integer $size
     * @param  int|integer $offset
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function simpleList(int $roleId, int $size = 20, int $offset = 0)
    {
        $params = [
            'role_id' => $roleId,
            'size' => $size,
            'offset' => $offset
        ];

        return $this->httpGet('topapi/role/simplelist', $params);
    }

    /**
     * 获取角色组信息
     *
     * @param  int $groupId
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function getRoleGroup(int $groupId)
    {
        $params = [
            'group_id' => $groupId
        ];

        return $this->httpGet('topapi/role/getrolegroup', $params);
    }

    /**
     * 获取角色详情
     *
     * @param  int $roleId
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function getRole(int $roleId)
    {
        $params = [
            'roleId' => $roleId
        ];

        return $this->httpGet('topapi/role/getrole', $params);
    }
}