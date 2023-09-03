<?php

declare(strict_types=1);

namespace App\View\Components\Home;

use Illuminate\View\Component;
use Illuminate\Support\Arr;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];
    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category'  => ['PHP', 'Frontend', 'MySQL'],
                'title'     => 'Full Stack bookstore "Bookex"',
                'image'     => url('/img/1-bookex.png'),
                'github'    => 'https://github.com/Zeppgoespro/bookshop-bookex-pet-project'
            ],
            [
                'category'  => ['PHP', 'Frontend', 'MySQL'],
                'title'     => 'Full Stack estate agency "Hearthfire"',
                'image'     => url('/img/2-hearthfire.png'),
                'github'    => 'https://github.com/Zeppgoespro/estate-agency-hearthfire-pet-project'
            ],
            [
                'category'  => ['PHP', 'PHPUnit', 'OOP'],
                'title'     => 'PHPUnit testing samples',
                'image'     => url('/img/3-testing.png'),
                'github'    => 'https://github.com/Zeppgoespro/pwgio-php-exercise-phpunit'
            ],
            [
                'category'  => ['PHP', 'MySQL', 'Course'],
                'title'     => 'freeCodeCamp PHP/JS exercise',
                'image'     => url('/img/4-wa4e.png'),
                'github'    => 'https://github.com/Zeppgoespro/freecodecamp-web-applications-course'
            ],
            [
                'category'  => ['PHP', 'OOP', 'Course'],
                'title'     => 'PHP OOP accounting table exercise',
                'image'     => url('/img/5-oop.png'),
                'github'    => 'https://github.com/Zeppgoespro/pwgio-php-exercise-oop'
            ],
            [
                'category'  => ['Laravel', 'AlpineJS', 'OOP'],
                'title'     => '$this->website',
                'image'     => url('/img/6-workshop.png'),
                'github'    => 'https://github.com/Zeppgoespro/frodo-project-laravel'
            ]
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
