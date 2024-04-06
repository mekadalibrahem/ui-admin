<?php 

namespace Mekadalibrahem\Uiadmin\Tests ;

use Mekadalibrahem\Uiadmin\UiadminServiceProvider ;

class TestCase extends \Orchestra\Testbench\TestCase 
{
    public function setUp():void 
    {
        parent::setUp(); 
    }

    protected function getPackageProviders($app)
    {
        return [
            UiadminServiceProvider::class,
        ];
    }
}
