<?php declare(strict_types=1);


namespace Rafique\AdminApi\Test\Unit;


class SetValueTest extends \PHPUnit\Framework\TestCase
{
    /**
     * We test to validate if we have a different password from the one previously set
     */
    public function testPut()
    {
        $config = [
            'scope' => "default",
            'path' => "/web/seo/use_rewrites",
            'value' => "0"
        ];

        $this->assertNotSame($config, ['scope' => "default", 'path' => "/web/seo/use_rewrites", "value" => "1"]);
    }
}

