<?php 

namespace Mekadalibrahem\Uiadmin\Console ;

use Illuminate\Console\Command ;

class InstallCommand extends Command 
{
    protected $signature = "uiadmin:install";

protected $description = "Install the ui-admin package" ;

    public function handle(){
        return 0 ;
    }
}
