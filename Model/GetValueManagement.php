<?php declare(strict_types=1);


namespace Rafique\AdminApi\Model;


use Rafique\AdminApi\Helper\Data;

class GetValueManagement implements \Rafique\AdminApi\Api\GetValueManagementInterface
{
    /**
     * Core store config
     *
     * @var Data
     */
    protected $helper;

    public function __construct(
        Data $helper
    ) {
        $this->helper = $helper;
    }

    /**
     * {@inheritdoc}
     */
    public function getGetValue($param)
    {
        // Use the GET variable to retrieve the path because of stupid Magento
       return $this->helper->getConfigData($param, $_GET['path']);
    }
}

