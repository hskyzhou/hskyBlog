<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Contracts\Repositories\MenuRepository::class, \App\Repositories\Eloquent\MenuRepositoryEloquent::class);
        $this->app->bind(\App\Contracts\Repositories\PermissionRepository::class, \App\Repositories\Eloquent\PermissionRepositoryEloquent::class);
        $this->app->bind(\App\Contracts\Repositories\RoleRepository::class, \App\Repositories\Eloquent\RoleRepositoryEloquent::class);
        $this->app->bind(\App\Contracts\Repositories\UserRepository::class, \App\Repositories\Eloquent\UserRepositoryEloquent::class);
        $this->app->bind(\App\Contracts\Repositories\MenuRelationRepository::class, \App\Repositories\Eloquent\MenuRelationRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\ArticleRepository::class, \App\Repositories\Eloquent\ArticleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\ProjectLevelRepository::class, \App\Repositories\Eloquent\ProjectLevelRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\CommentRepository::class, \App\Repositories\Eloquent\CommentRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\BlogMenuRepository::class, \App\Repositories\Eloquent\BlogMenuRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\BlogMenuRelationRepository::class, \App\Repositories\Eloquent\BlogMenuRelationRepositoryEloquent::class);
        //:end-bindings:
    }
}
