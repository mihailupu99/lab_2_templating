<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        //
        View::composer('home', function ($view) {
            $latestTask = [
                'id' => 5,
                'title' => 'Task to update database.',
                'description' => 'This is the description of the task',
                'created_at' => now()->format('Y-m-d H:i:s'), 
                'updated_at' => now()->format('Y-m-d H:i:s'), 
                'status' => false, 
                'priority' => 'low', 
                'assigned_to' => 'John Doe',
            ];
    
            $view->with('latestTask', $latestTask);
        });
    }
}
