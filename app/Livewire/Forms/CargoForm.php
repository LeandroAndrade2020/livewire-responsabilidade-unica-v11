<?php

namespace App\Livewire\Forms;

use App\Models\Cargo;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CargoForm extends Form
{
    public ?Cargo $cargo;

    // #[Locked]
    public $id;

    #[Validate('required|string', as: 'nome')]
    public $name;

    public function setCargo(Cargo $cargo): void
    {
        $this->cargo = $cargo;

        $this->name         = $cargo->name;
    }

    public function store(): void
    {
        Cargo::create($this->except(['cargo']));

        $this->reset();
    }

    public function update(): void
    {
        $this->cargo->update($this->except(['cargo']));

        $this->reset();
    }
}
