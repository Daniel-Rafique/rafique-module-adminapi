<?php declare(strict_types=1);


namespace Rafique\AdminApi\Model;

use \Magento\Framework\App\RequestInterface;
use Rafique\AdminApi\Helper\Data;

class GetValueManagement implements \Rafique\AdminApi\Api\GetValueManagementInterface
{
    /**
     * Core store config
     *
     * @var Data
     */
    protected $helper;
    protected $request;

    public function __construct(
        Data $helper,
        RequestInterface $request
    ) {
        $this->helper = $helper;
        $this->request = $request;
    }

    /**
     * {@inheritdoc}
     */
    public function getGetValue($param)
    {
        // Use RequestInterface to get the path param
        return $this->helper->getConfigData($this->request->getParam('path'), $param);
    }
}

