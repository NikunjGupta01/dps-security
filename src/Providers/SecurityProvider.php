<?php

namespace NikunjGupta01\dpssecurity\Providers;


use Illuminate\Support\ServiceProvider;

class SecurityProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/../routes/routes.php");
    }
}
