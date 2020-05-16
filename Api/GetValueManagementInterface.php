<?php declare(strict_types=1);


namespace Rafique\AdminApi\Api;


interface GetValueManagementInterface
{

    /**
     * GET for GetValue api
     * @param string $param
     * @return string[]|null
     */
    public function getGetValue($param);
}

