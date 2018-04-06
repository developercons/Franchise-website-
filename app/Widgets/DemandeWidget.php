<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\Demande;

class DemandeWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Demande::all()->count();
        $string = "Demandes";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-move',
            'title'  => "{$count} {$string}",
            'text'   => "Vous avez ".$count. " demandes recu. Cliquez sur le bouton ci-dessous pour afficher tous les demandes",
            'button' => [
                'text' =>"Voir tous les demande",
                'link' => route('voyager.demandes.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }
}
