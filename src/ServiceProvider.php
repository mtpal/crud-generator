<?php

namespace Mtpal\CrudGenerator;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/crudgenerator.php' => config_path('crudgenerator.php'),
        ]);

        $this->publishes([
            __DIR__ . '/../publish/views/' => base_path('resources/views/'),
        ]);

        if (\App::VERSION() <= '5.2') {
            $this->publishes([
                __DIR__ . '/../publish/css/app.css' => public_path('css/app.css'),
            ]);
        }

        $this->publishes([
            __DIR__ . '/stubs/' => base_path('resources/crud-generator/'),
        ]);
    }

    public function register()
    {
        $this->commands(
            'Mtpal\CrudGenerator\Commands\CrudCommand',
            'Mtpal\CrudGenerator\Commands\CrudControllerCommand',
            'Mtpal\CrudGenerator\Commands\CrudModelCommand',
            'Mtpal\CrudGenerator\Commands\CrudMigrationCommand',
            'Mtpal\CrudGenerator\Commands\CrudViewCommand',
            'Mtpal\CrudGenerator\Commands\CrudLangCommand',
            'Mtpal\CrudGenerator\Commands\CrudApiCommand',
            'Mtpal\CrudGenerator\Commands\CrudApiControllerCommand'
        );
    }
}
