<?php

namespace Mekadalibrahem\Uiadmin\Console ;

use Illuminate\Filesystem\Filesystem;

trait InstallLivewireStack
{

    public static  $NODE_PACKAGE = [
                'autoprefixer' => '^10.4.18',
                'postcss' => '^8.4.35',
                'tailwindcss' => '^3.4.1',
                'flowbite' => '^2.3.0' ,
                "alpinejs"=> "^3.13.7",
    ];

    public static  $COMPOSER_PACKAGE = [
        "livewire/livewire:^3.4",
        "spatie/laravel-permission"=> "^6.4"
    ];  

    /**
     * install livewire   stack
     */
    public function installLivewireStack()
    {
        // define path for livewire stup 
        $stup = __DIR__."/../../stubs/livewire";
        $this->components->info('Start install livewire stack ');
        $this->components->info('Start install required composer packages ');
        $this->requireComposerPackages(installLivewireStack::$COMPOSER_PACKAGE);
        $this->components->info('End install required composer packages ');


        // $this->callSilent('vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"');
        // $this->installServiceProviderAfter('RouteServiceProvider' , 'Jenssegers\Agent\AgentServiceProvider');
        //  // Configure Session...
        //  $this->configureSession();




        // NPM Packages...
        $this->updateNodePackages(function ($packages) {
            return installLivewireStack::$NODE_PACKAGE + $packages;
        });
        $this->components->info('Start Extracting files .... ');

        // livewire 
        (new Filesystem)->ensureDirectoryExists(app_path('Livewire'));
        (new Filesystem)->copyDirectory($stup.'/app/Livewire/Uiadmin' ,app_path('Livewire/Uiadmin'));

        (new Filesystem)->ensureDirectoryExists(app_path('View'));
        (new Filesystem)->copyDirectory($stup .'/app/View/Components/Uiadmin' , app_path('/View/Components/Uiadmin'));
      
        //resource 
        (new Filesystem)->copyDirectory($stup.'/resources' , resource_path());

        copy($stup.'/routes/uiadmin.php' , base_path('/routes/uiadmin.php') );
       $this->add_routes_to_web_file();
        $this->init_spatie_permissions_config();

        copy($stup .'/tailwind.config.js', base_path('tailwind.config.js'));
        copy($stup .'/postcss.config.js', base_path('postcss.config.js'));
        copy($stup .'/vite.config.js', base_path('vite.config.js'));
        $this->components->info('End Extracting files  ');
       

        $this->components->info('Installing and building Node dependencies.');

        if (file_exists(base_path('pnpm-lock.yaml'))) {
            $this->runCommands(['pnpm install', 'pnpm run build']);
        } elseif (file_exists(base_path('yarn.lock'))) {
            $this->runCommands(['yarn install', 'yarn run build']);
        } else {
            $this->runCommands(['npm install', 'npm run build']);
        }



        $this->line('');
        $this->components->info('ui-admin  installed successfully.');
    
        
    }

}
