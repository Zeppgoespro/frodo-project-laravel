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
                'category'  => ['Vanilla PHP', 'Frontend', 'MySQL'],
                'title'     => 'Full Stack bookstore Bookex',
                'image'     => url('/img/bookex.jpg'),
                'github'    => 'https://github.com/Zeppgoespro/bookshop-bookex-pet-project'
            ],
            [
                'category'  => ['Vanilla PHP', 'Frontend', 'MySQL'],
                'title'     => 'Full Stack estate agency Hearthfire',
                'image'     => url('/img/palace.jpg'),
                'github'    => 'https://github.com/Zeppgoespro/estate-agency-hearthfire-pet-project'
            ],
            [
                'category'  => ['Vanilla PHP', 'PHPUnit', 'OOP'],
                'title'     => 'PHP testing sample',
                'image'     => url('/img/palace.jpg'),
                'github'    => 'https://github.com/Zeppgoespro/pwgio-php-exercise-phpunit'
            ],
            [
                'category'  => ['Vanilla PHP', 'MySQL', 'Course'],
                'title'     => 'freeCodeCamp HTML CSS JS PHP MySQL course exercise',
                'image'     => url('/img/palace.jpg'),
                'github'    => 'https://github.com/Zeppgoespro/freecodecamp-web-applications-course'
            ],
            [
                'category'  => ['Vanilla PHP', 'OOP', 'Course'],
                'title'     => 'Full PHP backend course with almost everything needed to learn',
                'image'     => url('/img/palace.jpg'),
                'github'    => 'https://github.com/Zeppgoespro/pwgio-php-education'
            ],
            [
                'category'  => ['Laravel', 'AlpineJS', 'OOP'],
                'title'     => '$this->website',
                'image'     => url('/img/palace.jpg'),
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
