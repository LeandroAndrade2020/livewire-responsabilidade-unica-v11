<?php

namespace App\Livewire\Cargo;

use App\Models\Cargo;
use App\Traits\WithSorting;
use App\Livewire\Forms\CargoForm;
use Livewire\Attributes\{On, Url};
use Illuminate\Support\Facades\Gate;
use Livewire\{Component, WithPagination};
use Symfony\Component\HttpFoundation\Response;

class Table extends Component
{
    use WithPagination;
    use WithSorting;

    public CargoForm $form;

    public $paginate = 5;

    public $sortBy = 'cargos.name';

    public $sortDirection = 'asc';

    #[Url]
    public string $search = '';

    protected $queryString = [
        'search'   => ['except' => ''],
        'paginate' => ['except' => '5'],
    ];

    #[On('dispatch-cargo-create-save')]
    #[On('dispatch-cargo-create-edit')]
    #[On('dispatch-cargo-delete-del')]
    public function render()
    {
        abort_if(Gate::denies('diretor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data = Cargo::pesquisa($this->search)
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->paginate);

        return view('livewire.cargo.table', compact('data'));
    }
}
