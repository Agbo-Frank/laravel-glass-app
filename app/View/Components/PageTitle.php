<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageTitle extends Component
{
    public $title; // new property
    public $location;// new property

    public function __construct($title, $location)
    {
        $this->title = $title;
        $this->$location = $location;
    }

    public function render()
    {
        return view('components.page-title');
    }
}
