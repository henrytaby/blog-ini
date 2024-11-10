<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{


    public function __construct(
        public string $metaTitle = 'Default Title',
        public string $metaDescription = 'Default Description'
    ) {
    }
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}
