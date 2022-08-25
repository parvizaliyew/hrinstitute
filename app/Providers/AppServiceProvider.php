<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Program;
use App\Models\Contact;
use Route;
    

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
        view()->share('contact_info',Contact::withTranslation()->first());
        
        view()->composer('*', function ($view) {
            $view->with('current',Route::current()->getName());
        });

        view()->composer(['front.layouts.footer','front.layouts.header','front.pages.index'], function ($view) {
            $view->with('hr_heller',Program::withTranslation()->where('category_id',2)->get());
            $view->with('edu_programs',Program::withTranslation()->where('category_id',4)->get());
            $view->with('ser_programs',Program::withTranslation()->where('category_id',3)->get());
        });
    }
}
