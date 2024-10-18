<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
//    public $metaTitle = 'Default title';
//    public $metaDescription = 'Default description';

    public function __construct($metaTitle = null, $metaDescription = null){
        public $metaTitle = 'Default title';
        public $metaDescription = 'Default description';
    }
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}
