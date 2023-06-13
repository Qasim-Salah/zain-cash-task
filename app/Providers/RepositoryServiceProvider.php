<?php

namespace App\Providers;

use App\Interfaces\Api\Employee\EmployeeRepositoryInterfaceApi;
use App\Interfaces\Api\File\FileRepositoryInterfaceApi;
use App\Interfaces\File\FileRepositoryInterface;
use App\Repositories\Api\File\FileRepositoryApi;
use App\Repositories\Api\Employee\EmployeeRepositoryApi;
use App\Repositories\File\FileRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(EmployeeRepositoryInterfaceApi::class, EmployeeRepositoryApi::class);
        $this->app->bind(FileRepositoryInterfaceApi::class, FileRepositoryApi::class);
        $this->app->bind(FileRepositoryInterface::class, FileRepository::class);
    }
}
