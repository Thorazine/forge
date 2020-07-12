<?php

namespace Thorazine\Forge;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Http\Kernel;

class ForgeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Kernel $kernel)
    {
        $this->publishes([
            __DIR__.'/config/forge.php' => config_path('forge.php'),
        ], 'forge');

        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'forge');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('forge', function()
        {
            return new \Thorazine\Forge\Classes\Facades\Forge;
        });

        $this->mergeConfigFrom(__DIR__.'/config/forge.php', 'forge');
    }
}
]
