<?php declare(strict_types=1);


namespace Rafique\AdminApi\Api;


interface GetValueManagementInterface
{

    /**
     * GET for GetValue api
     * @param string $param
     * @return array
     */
    public function getGetValue($param);
}

