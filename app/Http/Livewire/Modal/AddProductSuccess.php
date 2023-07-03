<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;

class AddProductSuccess extends Component
{
    public function render()
    {
        return view('modal.add-product-success')
        ->extends('layouts.app')
        ->section('content');
    }
}
