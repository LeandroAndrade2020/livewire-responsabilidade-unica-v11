<?php

namespace App\Livewire\Cargo;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('CArgos')]
    public function render(): View
    {
        return view('livewire.cargo.index');
    }
}
