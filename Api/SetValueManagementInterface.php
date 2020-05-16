<?php


namespace Rafique\AdminApi\Api;


interface SetValueManagementInterface
{

    /**
     * PUT for SetValue api
     * @param string[] $param
     * @return string[]|null
     */
    public function putSetValue($param);
}

