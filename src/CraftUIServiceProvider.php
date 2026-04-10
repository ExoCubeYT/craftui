<?php

namespace Exocubeyt\CraftUI;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Exocubeyt\CraftUI\Commands\InstallCommand;

class CraftUIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);

            $this->publishes([
                __DIR__.'/../config/craftui.php' => config_path('craftui.php'),
            ], 'craftui-config');

            $this->publishes([
                __DIR__.'/../resources/views/components' => resource_path('views/vendor/craftui/components'),
            ], 'craftui-views');

            $this->publishes([
                __DIR__.'/../public' => public_path('vendor/craftui'),
            ], 'craftui-assets');
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'craftui');

        $this->registerComponents();
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/craftui.php', 'craftui');
    }

    protected function registerComponents()
    {
        $prefix = config('craftui.prefix', 'craftui');

        Blade::componentNamespace('Exocubeyt\\CraftUI\\Components', $prefix);
    }
}
