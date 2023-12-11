<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\{Category};

class UserFooter extends Component
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
        // $categories = Category::whereType("service")->get();
        $services = Category::whereType("service")->get();
        return view('components.user-footer', compact('services'));
    }
}
