<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Display extends Component
{
    public string $phone = '';

    public function render(): View
    {
        return view('livewire.display');
    }

    public function submit(): void
    {
        $this->emit('changePhone',$this->phone);
    }
}
