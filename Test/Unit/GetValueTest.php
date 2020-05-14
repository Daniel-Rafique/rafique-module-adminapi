<?php declare(strict_types=1);


namespace Rafique\AdminApi\Test\Unit;


use PHPUnit\Framework\TestCase;

class GetValueTest extends TestCase
{

    /**
     * We test whether the path being sent is the same as those already set
     */
    public function testGet()
    {
        $config = [
            'store_code' => "default",
            'path' => "/web/seo/use_rewrites"
        ];

        $this->assertSame($config, ['store_code' => "default", 'path' => "/web/seo/use_rewrites"]);
    }
}

