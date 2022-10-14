<?php

namespace App\Http\Livewire;

use App\Models\Marriage;
use Livewire\Component;
use Livewire\WithPagination;

class MarriageIndex extends Component
{
	use WithPagination;

	//protected $paginationTheme = 'bootstrap';

	public $search;

	public function updatingSearch() {
		$this->resetPage();
	}

	public function render()
	{
		$marriages = Marriage::where(function ($query) {
			$query->where('NombresEsposo', 'like', '%' . $this->search . '%')
			->orwhere('ApellidoPaternoEsposo', 'like', '%' . $this->search . '%')
			->orwhere('ApellidoMaternoEsposo', 'like', '%' . $this->search . '%')
			->orwhere('RutEsposo', 'like', '%' . $this->search . '%')
			->orwhere('NombresEsposa', 'like', '%' . $this->search . '%')
			->orwhere('ApellidoPaternoEsposa', 'like', '%' . $this->search . '%')
			->orwhere('ApellidoMaternoEsposa', 'like', '%' . $this->search . '%')
			->orwhere('RutEsposa', 'like', '%' . $this->search . '%');
		})->latest('id')->paginate(10);

		return view('livewire.marriage-index', compact('marriages'));
	}
}