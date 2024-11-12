<?php

namespace App\Livewire\Cargo;

use App\Livewire\Forms\CargoForm;
use App\Models\Cargo;
use Livewire\Attributes\On;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Edit extends Component
{
    use Interactions;

    public CargoForm $form;

    public $modalEdit = false;

    #[On('dispatch-cargo-table-edit')]
    public function set_cargo(Cargo $id)
    {
        $this->form->setCargo($id);

        $this->modalEdit = true;
    }

    public function edit()
    {
        $this->validate();

        $this->form->update();

        $this->toast()->success('Cadastro atualizado com sucesso!')->send();

        $this->dispatch('dispatch-cargo-create-edit')->to(Table::class);

        $this->modalEdit = false;

        return redirect()->route('cargo.index');
    }
    public function render()
    {
        return view('livewire.cargo.edit');
    }
}
