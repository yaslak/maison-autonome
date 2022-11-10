<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Display extends Component
{
    public string $last_name = '';

    public function render(): View
    {
        return view('livewire.display');
    }

    public function submit()
    {
        $this->emit('changeName',$this->last_name);
    }
}
