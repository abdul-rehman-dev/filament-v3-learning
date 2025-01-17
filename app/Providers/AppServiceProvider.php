<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Filament\Forms\Components\DatePicker;


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
    public function boot(): void
    {
        DatePicker::configureUsing(fn(DatePicker $component) => $component->placeholder("dd/mm/yyyy")->native(false)->displayFormat('d/m/Y'));
        Schema::defaultStringLength(191);
    }
}
