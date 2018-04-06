<?php
namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\Candidat;

class CandidatWidget extends AbstractWidget
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
        $count = Candidat::all()->count();
        $string = "Candidats";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-people',
            'title'  => "{$count} {$string}",
            'text'   => "Vous avez ".$count. " candidat enregistrés. Cliquez sur le bouton ci-dessous pour afficher tous les Candidats",
            'button' => [
                'text' =>"Voir tous les Candidat",
                'link' => route('voyager.candidats.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/01.jpg'),
        ]));
    }
}
