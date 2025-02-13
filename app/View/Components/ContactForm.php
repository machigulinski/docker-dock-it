<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContactForm extends Component {

    public $button;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($button = null) {
        $this->button = $button;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contact-form');
    }
}
