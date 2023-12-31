<?php

declare(strict_types=1);

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navigationItems = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => 'Про меня',     'href' => '#about'],
            ['label' => 'Мои проекты',  'href' => '#portfolio'],
            ['label' => 'Где учился',   'href' => '#education'],
            ['label' => 'Связь',        'href' => '#contact'],
            ['label' => 'Вся история',   'href' => '/full-story']
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar');
    }
}
