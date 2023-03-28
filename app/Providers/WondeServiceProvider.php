<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Wonde\Client;

class WondeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Client::class, function (Application $app) {
            return new Client(config('services.wonde.token'));
        });
    }

    public function provides(): array
    {
        return [
            Client::class
        ];
    }
}
