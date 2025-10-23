<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $contentName;
    public $attributesData;

    public function __construct($contentName = null, $attributesData = [])
    {
        $this->contentName = $contentName;
        $this->attributesData = $attributesData;
    }

    public function render()
    {
        return view('components.navbar');
    }
}
