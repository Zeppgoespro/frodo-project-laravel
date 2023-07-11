<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\View\Component;

class PortfolioItem extends Component
{
    /**
     * Create a new component instance.
     * @param string $title
     * @param array $categories
     * @param string $image
     * @param string $github
     * @return void
     */
    public function __construct(
        public string $title,
        public array $categories,
        public string $image,
        public string $github
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.portfolio-item');
    }
}
