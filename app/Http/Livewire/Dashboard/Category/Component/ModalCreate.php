<?php

namespace App\Http\Livewire\Dashboard\Category\Component;

use Livewire\Component;

class ModalCreate extends Component
{
    public $modalOpen;
    public $label, $data;
    protected $listeners = [
        'modalOpen' => 'modalOpen',
        'refreshLabel' => 'refreshLabel',
        'loadCategoryData' => 'loadData',
        // 'modalOpen' => 'modalOpen'
    ];

    // public function mount($dataCategory = null)
    // {
    //     $this->loadData($dataCategory);
    // }

    public function render()
    {
        return view('dashboard.category.component.modal-create');
    }

    public function modalOpen ()
    {
        $this->modalOpen = true;
    }

    public function modalClose()
    {
        $this->modalOpen = false;
        $this->label = null;

    }

    public function refreshLabel ()
    {
        $this->label= null;
    }

    public function saveOrUpdateCategoryData()
    {
        // save validation and query
        $this->emit('categoryDataUpdated', $this->data, $this->label);
        // dd($this->label);
        $this->modalClose();
        $this->emit('reset');
        $this->data = null;

    }

    public function loadData($dataCategory)
    {
        $this->data = $dataCategory;
        $this->label = $dataCategory['label'];
    }
}
