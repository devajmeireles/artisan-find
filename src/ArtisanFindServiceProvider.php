<?php

namespace DevAJMeireles\ArtisanFind;

use Illuminate\Support\ServiceProvider;

class ArtisanFindServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(Console\ArtisanFindCommand::class);
        }
    }
}
