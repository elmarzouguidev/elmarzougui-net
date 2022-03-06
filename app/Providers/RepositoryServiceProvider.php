<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    private $repositories;

    /**
     * @return void
     */
    public function register(): void
    {
        $this->repositories = RegisterRepositories();

        foreach ($this->repositories as $repo) {
            //  info($repo);
            $this->app->singleton(
                $repo['abstract'],
                $repo['concrete']
            );
        }
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
