<?php

namespace App\Providers;

use App\Repository\CategoryInterface;
use App\Repository\CategoryRepository;
use App\Repository\subCategoryRepository\SubCategoryInterface;
use App\Repository\subCategoryRepository\SubCategoryRepository;
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
        $this->app->bind(CategoryInterface::class, CategoryRepository::class);
        $this->app->bind(SubCategoryInterface::class,SubCategoryRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
