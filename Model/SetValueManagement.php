<?php declare(strict_types=1);


namespace Rafique\AdminApi\Model;


use Rafique\AdminApi\Helper\Data;
use Magento\Framework\App\Config\Storage\WriterInterface;
use Magento\Framework\Encryption\EncryptorInterface;

class SetValueManagement implements \Rafique\AdminApi\Api\SetValueManagementInterface
{

    const STORE = 'default';
    /**
     * Core store config
     *
     * @var \Rafique\AdminApi\Helper\Data
     */
    protected $helper;
    protected $writer;
    protected $encrypt;

    /**
     * SetValueManagement constructor.
     * @param Data $helper
     * @param WriterInterface $writer
     * @param EncryptorInterface $encryptor
     */
    public function __construct(
        Data $helper,
        WriterInterface $writer,
        EncryptorInterface $encryptor
    ) {
        $this->helper = $helper;
        $this->writer = $writer;
        $this->encrypt = $encryptor;
    }

    /**
     * {@inheritdoc}
     */
    public function putSetValue($param)
    {
        $value = $param['value'];

        if ($param['encrypt'] === "1"){
            $value = $this->encrypt->encrypt($param['value']);
        }

        return $this->writer->save($param['path'], $value, $param['scope']);
    }
}

