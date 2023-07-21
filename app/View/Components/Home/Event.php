<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Event extends Component
{
    public array $Events = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->Events = [
            [
                'videoId' => 'grwDLi0uxeo',
                'title' => 'Festival de Cannes',
                'description' => 'Ses créations sont présentées en avant-première dans des salons à Paris, Londres, aux États-Unis et au Moyen-Orient.'
            ],
            [
                'videoId' => 'UZeUzFVRvE0',
                'title' => 'Skin Territory',
                'description' => 'Les créations de Martial peuvent être vues dans de nombreux magazines de mode comme ELLE, FEMME ACTUELLE, BRUNE, etc.'
            ],
            [
                'videoId' => 'tEayQwqOs-Y',
                'title' => 'Mouvement des Jeunes',
                'description' => 'Basé à Paris et au Cameroun, il est constamment en mouvement.'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.event');
    }
}
