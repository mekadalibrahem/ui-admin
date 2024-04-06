<?php 

namespace Mekadalibrahem\Uiadmin\Tests\Unit ;

use Illuminate\Support\Facades\Artisan ;
use Mekadalibrahem\Uiadmin\Tests\TestCase; 

class InstallCommandTest extends TestCase 
{
    public function test_install_command()
    {
        $this->assertEquals(Artisan::call('uiadmin:install') ,0);
    }
}


