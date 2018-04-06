<?php
namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\Franchiseur;

class FranchiseurWidget extends AbstractWidget
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
        $count = Franchiseur::all()->count();
        $string = "Franchiseurs";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-person',
            'title'  => "{$count} {$string}",
            'text'   => "Vous avez ".$count. " Franchiseur enregistrés. Cliquez sur le bouton ci-dessous pour afficher tous les Franchiseurs",
            'button' => [
                'text' =>"Voir tous les Franchiseur",
                'link' => route('voyager.franchiseurs.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }
}
