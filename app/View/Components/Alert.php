<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $h1;
    public function __construct($h1)
    {
        $this->h1 = $h1;
    }

    public function isSelected(){
        return true;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert')->with([
            'h1' => $this->h1,
            'h2' => $this->h1,
            ]);
    }
}
