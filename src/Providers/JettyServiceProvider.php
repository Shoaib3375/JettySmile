<?php

namespace MyLife\Providers;

use Illuminate\Support\ServiceProvider;

class JettyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('jetty', function () {
            return new \MyLife\Services\Jetty([
                'loyalty' => true,
                'trust' => true,
                'smile' => 'unforgettable',
                'loveLevel' => 100,
            ]);
        });
    }

    public function boot()
    {
        echo "💖 Jetty has been added to your life. Let the love story begin.\n";
    }
}
