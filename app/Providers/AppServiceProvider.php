<?php

namespace App\Providers;

use App\Doctor;
use App\Profession;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $professionsShare = Profession::all();
        View::share('professionsShare',$professionsShare); // расшаривание на весь сайт


        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('ГЛАВНАЯ ПАНЕЛЬ');

            /*********** Доктора ***************/

            $event->menu->add('Доктора');
            $event->menu->add([
                'text' => 'Доктора',
                'url' => 'admin/doctor',
                'icon_color' => 'aqua',
                'label'=> Doctor::all()->count(),
            ]);
            $event->menu->add([
                'text' => 'Добавить нового доктора',
                'url' => 'admin/doctor/create',
                'icon_color' => 'yellow',
            ]);

            /*********** Профессии ***************/

            $event->menu->add('Профессии');
            $event->menu->add([
                'text' => 'Профессии',
                'url' => 'admin/profession',
                'icon_color' => 'aqua',
                'label'=> Profession::all()->count(),
            ]);
            $event->menu->add([
                'text' => 'Добавить новую профессию',
                'url' => 'admin/profession/create',
                'icon_color' => 'yellow',
            ]);




            View::share('professions',\App\Profession::all()); // для админки

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
