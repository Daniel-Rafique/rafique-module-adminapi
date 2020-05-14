<?php declare(strict_types=1);


namespace Rafique\AdminApi\Helper;

use Magento\Framework\App\Helper\AbstractHelper;


class Data extends AbstractHelper
{

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    public function getConfigData(?string $code, $path)
    {
        return $this->scopeConfig->getValue($path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}

