<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('Главная панель');

            $event->menu->add([
                'text' => 'Профессии',
                'url' => 'admin/profession',
                'icon_color' => 'aqua',
            ]);
            $event->menu->add([
                'text' => 'Добавить новую профессию',
                'url' => 'admin/profession/create',
                'icon_color' => 'lime',
            ]);



        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
