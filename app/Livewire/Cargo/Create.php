<?php

namespace App\Livewire\Cargo;

use App\Livewire\Forms\CargoForm;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Create extends Component
{
    use Interactions;

    public CargoForm $form;

    public $modalCreate = false;

    public function save()
    {
        $this->validate();
        $this->form->store();

        $this->toast()->success('Cadastro realizado com sucesso!')->send();

        $this->dispatch('dispatch-cargo-create-save')->to(Table::class);

        $this->modalCreate = false;

        return redirect()->route('cargo.index');
    }

    public function render()
    {
        return view('livewire.cargo.create');
    }
}
