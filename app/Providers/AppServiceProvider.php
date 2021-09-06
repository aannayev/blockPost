<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Cache;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {




        view()->composer('layouts.sidebar', function ($view) {
            if (Cache::has('cats')) {
                $cats = Cache::get('cats');
            } else {
                $cats = Category::withCount('posts')->orderBy('posts_count', 'desc')->get();
                Cache::put('cats', $cats, 60);
            }
            $view->with('popular_posts', Post::orderBy('views', 'desc')->limit(3)->get());
            $view->with('cats', $cats);
        });
        Paginator::useBootstrap();
    }
}
