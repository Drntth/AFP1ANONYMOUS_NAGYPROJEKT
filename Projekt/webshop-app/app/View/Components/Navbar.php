<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $isDashboard;
    public $isMainPage;
    public $isProducts;

    public function __construct($isDashboard = false, $isMainPage = false, $isProducts = false)
    {
        $this->isDashboard = $isDashboard;
        $this->isMainPage = $isMainPage;
        $this->isProducts = $isProducts;
    }

    public function render()
    {
        return view('components.navbar');
    }
}
