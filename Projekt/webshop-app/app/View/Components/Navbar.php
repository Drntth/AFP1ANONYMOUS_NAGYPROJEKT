<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $isDashboard;
    public $isMainPage;

    public function __construct($isDashboard = false, $isMainPage = false)
    {
        $this->isDashboard = $isDashboard;
        $this->isMainPage = $isMainPage;
    }

    public function render()
    {
        return view('components.navbar');
    }
}
