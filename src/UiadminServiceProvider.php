<?php 

namespace Mekadalibrahem\Uiadmin ;

use Illuminate\Support\ServiceProvider ;

class UiadminServiceProvider extends ServiceProvider 
{
    public function register()
    {
        //
    }

    public function boot()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Console\InstallCommand::class,
        ]);
    
    }
}


