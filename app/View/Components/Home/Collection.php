<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Collection extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Flowers', 'ETE'],
                'title' => 'Collection Forbidden Flowers',
                'image' => url('/img/image_00.png'),
                'github' => ''
            ],
            [
                'category' => ['Trophée'],
                'title' => 'Collection Trophée de Chasse',
                'image' => url('/img/image_09.png'),
                'github' => ''
            ],
            [
                'category' => ['Shooting'],
                'title' => 'Shooting à Charmel Paris Etoile',
                'image' => url('/img/image_58.jpg'),
                'github' => ''
            ],
            [
                'category' => ['Trophée', 'Flowers'],
                'title' => 'Categorie des Fleurs ETE',
                'image' => url('/img/image_28.png'),
                'github' => ''
            ],
            
            [
                'category' => ['Automne', 'Shooting'],
                'title' => 'Collection Automn of Flowers',
                'image' => url('/img/image_13.png'),
                'github' => ''
            ],
            [
                'category' => ['Printemps'],
                'title' => 'Collection Printemps',
                'image' => url('/img/image_29.png'),
                'github' =>  ''
            ],
            [
                'category' => ['Soirée'],
                'title' => 'Categorie des vêtements de Soirée',
                'image' => url('/img/image_16.png'),
                'github' => ''
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.collection');
    }
}
