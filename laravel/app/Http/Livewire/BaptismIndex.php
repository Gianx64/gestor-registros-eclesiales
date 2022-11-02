<?php

namespace App\Http\Livewire;

use App\Models\Baptism;
use Livewire\Component;
use Livewire\WithPagination;

class BaptismIndex extends Component
{
	use WithPagination;

	//protected $paginationTheme = 'bootstrap';

	public $search;

	public function updatingSearch() {
		$this->resetPage();
	}

	public function render()
	{
		$baptisms = Baptism::where(function ($query) {
			$query->where('Nombres', 'like', '%' . $this->search . '%')
			->orwhere('ApellidoPaterno', 'like', '%' . $this->search . '%')
			->orwhere('ApellidoMaterno', 'like', '%' . $this->search . '%')
			->orwhere('Rut', 'like', '%' . $this->search . '%')
			->orwhere('Padrino', 'like', '%' . $this->search . '%')
			->orwhere('Madrina', 'like', '%' . $this->search . '%');
		})->latest('id')->paginate(10);

		return view('livewire.baptism-index', compact('baptisms'));
	}
}