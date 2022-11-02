<?php

namespace App\Http\Livewire;

use App\Models\Confirmation;
use Livewire\Component;
use Livewire\WithPagination;

class ConfirmationIndex extends Component
{
    use WithPagination;

    //protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch() {
        $this->resetPage();
    } 

    public function render()
    {
		$confirmations = Confirmation::where(function ($query) {
			$query->where('Nombres', 'like', '%' . $this->search . '%')
			->orwhere('ApellidoPaterno', 'like', '%' . $this->search . '%')
			->orwhere('ApellidoMaterno', 'like', '%' . $this->search . '%')
			->orwhere('Rut', 'like', '%' . $this->search . '%')
			->orwhere('Padrino', 'like', '%' . $this->search . '%')
			->orwhere('Madrina', 'like', '%' . $this->search . '%');
		})->latest('id')->paginate(10);

		return view('livewire.confirmation-index', compact('confirmations'));
    }
}