<?php

namespace VeseluyRodjer\ServiceGenerator;

use Illuminate\Support\ServiceProvider;
use VeseluyRodjer\ServiceGenerator\Console\MakeModel;
use VeseluyRodjer\ServiceGenerator\Console\MakeService;

class ServiceGeneratorServiceProvider extends ServiceProvider
{

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeService::class,
                MakeModel::class,
                MakeController::class,
            ]);
        }
    }
}
