<?php

declare(strict_types=1);

namespace App\View\Components\Home;

use Illuminate\View\Component;

class VideoTutorials extends Component
{

    public array $videoTutorials = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->videoTutorials = [
            [
                'videoId' => 'xr6uZDRTna0',
                'title' => 'Web Applications for Everybody Course - Dr. Chuck Teaches HTML, PHP, SQL, CSS, JavaScript, and more!',
                'description' => 'This beginner\'s course is a complete introduction to web application development. Learn how to build dynamic database-backed web sites. Dr. Chuck will teach you how to use HTML, CSS, JavaScript, PHP, MySQL, jQuery, and Handlebars to build web and database applications.'
            ],
            [
                'videoId' => 'kA9BTNPFObo',
                'title' => 'PHP - Encapsulation & Abstraction - Full PHP 8 Tutorial',
                'description' => 'This video covers two out of four Object Oriented Programming principles: encapsulation & abstraction. I cover how encapsulation & abstraction can be broken & some tricks to accessing private & protected properties and methods.'
            ],
            [
                'videoId' => 'QiO0uUwOiBg',
                'title' => 'PHP MVC Pattern - View Parameters Exploit - Full PHP 8 Tutorial',
                'description' => 'In this lesson, you will learn what the MVC pattern is, how it works and we will implement the basic parts of the MVC pattern. We\'ll refactor our existing code from previous lessons to use controllers & then implement views. We\'ll explore how an attacker could exploit certain functions/approaches that developers may take to gain access to sensitive information like database credentials & so on.'
            ],
            [
                'videoId' => '78Vpg97rQwE',
                'title' => 'Dependency Injection Container With & Without Reflection API Autowiring - Full PHP 8 Tutorial',
                'description' => 'In this video, we implement a basic PSR-11 DI container. You will learn how DI containers work behind the scenes, what is autowiring & how to implement reflection API based autowiring.'
            ],
            [
                'videoId' => 'G3e-cpL7ofc',
                'title' => 'HTML & CSS Full Course - Beginner to Pro',
                'description' => 'In this full course, we learn how to build websites with HTML and CSS, and get started as a software engineer.'
            ],
            [
                'videoId' => 'Wiu5bEOxkCQ',
                'title' => 'DOCKER FULL COURSE [5 hours]',
                'description' => 'Complete Docker Course - learn all core Docker features including Dockerfiles and Docker Compose.'
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.video-tutorials');
    }
}
