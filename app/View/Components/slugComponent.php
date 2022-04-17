<?php

namespace App\View\Components;

use App\Models\category;
use Illuminate\View\Component;

class slugComponent extends Component
{

    public $category;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->category =category::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slug-component');
    }
}