<?php

declare(strict_types=1);

namespace App\View\Components\FullStory;

use Illuminate\View\Component;

class Main extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
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
        return view('components.full-story.main');
    }
}