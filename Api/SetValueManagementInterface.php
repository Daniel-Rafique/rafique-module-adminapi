<?php


namespace Rafique\AdminApi\Api;


interface SetValueManagementInterface
{

    /**
     * PUT for SetValue api
     * @param string[] $param
     * @return string[]
     */
    public function putSetValue($param);
}

