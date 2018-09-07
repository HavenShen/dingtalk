<?php

namespace Enjelly\OfficialAccount\Department;

use Enjelly\Kernel\BaseClient;

/**
 * Class Department
 *
 * https://open-doc.dingtalk.com/microapp/serverapi2/dubakq
 *
 * @author    Haven Shen <havenshen@gmail.com>
 * @copyright    Copyright (c) Haven Shen
 */
class Client extends BaseClient
{
    /**
     * 获取子部门 ID 列表
     *
     * @param int $id
     *
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function listIds(int $id = 1)
    {
        $params = [
            'id' => $id
        ];

        return $this->httpGet('department/list_ids', $params);
    }

    /**
     * 获取部门列表
     *
     * @param  string $lang
     * @param  bool|null fetchChild
     * @param  int|integer $id
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function list(string $lang = 'zh_CN', bool $fetchChild = null, int $id = 1)
    {
        $params = [
            'lang' => $lang,
            'fetch_child' => $fetchChild,
            'id' => $id
        ];


        return $this->httpGet('department/list', $params);
    }

    /**
     * 获取部门详情
     *
     * @param  int|integer $id
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function get(int $id = 1)
    {
        $params = [
            'id' => $id
        ];

        return $this->httpGet('department/get', $params);
    }

    /**
     * 查询部门的所有上级父部门路径
     *
     * @param  int $id
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function listParentDeptsByDept(int $id)
    {
        $params = [
            'id' => $id
        ];

        return $this->httpGet('department/list_parent_depts_by_dept', $params);
    }

    /**
     * 查询指定用户的所有上级父部门路径
     *
     * @param  int $userId
     * @return \Psr\Http\Message\ResponseInterface|\Enjelly\Kernel\Support\Collection|array|object|string
     */
    public function listParentDeptsByUserId(int $userId)
    {
        $params = [
            'userId' => $userId
        ];

        return $this->httpGet('department/list_parent_depts', $params);
    }

    /**
     * 获取企业员工人数
     *
     * @param  int|integer $onlyActive
     * @return [type]
     */
    public function getOrgUserCount(int $onlyActive = 0)
    {
        $params = [
            'onlyActive' => $onlyActive
        ];

        return $this->httpGet('user/get_org_user_count', $params);
    }
}