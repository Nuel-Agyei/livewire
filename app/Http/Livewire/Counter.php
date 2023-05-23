<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public function decrement()
    {
        dd('Hatchis')
    }
    public function increment()
    {
        dd('Weed');
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
