<?php

namespace laravelito\Providers;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\ServiceProvider;

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
        // Si desea deshabilitar el ajuste del recurso más externo, 
        // puede usar el método withoutWrapping en la clase de recurso base. 
        // Por lo general, debe llamar a este método desde su AppServiceProvider u
        // otro proveedor de servicios que se carga en cada solicitud a su aplicación:
        Resource::withoutWrapping();
    }
}
