<?php

namespace Enjelly\OfficialAccount\User;

use Enjelly\Kernel\BaseClient;

/**
 * Class Client
 *
 * https://open-doc.dingtalk.com/microapp/serverapi2/ege851
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class Client extends BaseClient
{

    /**
     * 获取用户详情
     *
     * @param  string $userid
     * @param  string $lang
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function get(string $userid, string $lang = 'zh_CN')
    {
        $params = [
            'userid' => $userid,
            'lang' => $lang
        ];

        return $this->httpGet('user/get', $params);
    }

    /**
     * 获取部门用户 userid 列表（推荐使用）
     *
     * @param  string $deptID
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function getDeptMember(string $deptId)
    {
        $params = [
            'deptId' => $deptId
        ];

        return $this->httpGet('user/getDeptMember', $params);
    }

    /**
     * 获取部门用户
     *
     * @param  int $departmentId
     * @param  string $lang
     * @param  int|null $offset
     * @param  int|null $size
     * @param  string|null $order
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function simpleList(int $departmentId, string $lang = 'zh_CN', int $offset = null, int $size = null, string $order = null)
    {
        $params = [
            'department_id' => $departmentId,
            'lang' => $lang,
            'offset' => $offset,
            'size' => $size,
            'order' => $order
        ];

        return $this->httpGet('user/simplelist', $params);
    }

    /**
     * 获取部门用户（详情）
     *
     * @param  int $departmentId
     * @param  string $lang
     * @param  int|null $offset
     * @param  int|null $size
     * @param  string|null $order
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function list(int $departmentId, string $lang = 'zh_CN', int $offset = null, int $size = null, string $order = null)
    {
        $params = [
            'department_id' => $departmentId,
            'lang' => $lang,
            'offset' => $offset,
            'size' => $size,
            'order' => $order
        ];

        return $this->httpGet('user/list', $params);
    }

    /**
     * 获取管理员列表
     *
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function getAdmin()
    {
        $params = [
            //
        ];

        return $this->httpGet('user/get_admin', $params);
    }

    /**
     * 查询管理员是否具备管理某个应用的权限
     *
     * @param  string $appId
     * @param  string $userId
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function canAccessMicroapp(string $appId, string $userId)
    {
        $params = [
            'appId' => $appId,
            'userId' => $userId
        ];

        return $this->httpGet('user/can_access_microapp', $params);
    }

    /**
     * 根据 unionid 获取 userid
     *
     * @param  string $unionid
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function getUseridByUnionid(string $unionid)
    {
        $params = [
            'unionid' => $unionid
        ];

        return $this->httpGet('user/getUseridByUnionid', $params);
    }

    /**
     * @param  string $code
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function getUserInfo(string $code)
    {
        $params = [
            'code' => $code
        ];

        return $this->httpGet('user/getuserinfo', $params);
    }
}