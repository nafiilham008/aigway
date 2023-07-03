<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Category;
use App\Models\Product;
use App\Models\Reseller;
use App\Models\Testimony;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{

    public $category, $product, $reseller;

    public function mount () 
    {
        $this->getCategory();
        $this->getProduct();
        $this->getReseller();
    }

    public function getCategory ()
    {
        $this->category = Category::all(); 
    }

    public function getProduct ()
    {
        $this->product = Product::with('category')->get(); 
    }

    public function getReseller ()
    {
        $this->reseller = Reseller::all(); 
    }
    
    public function render()
    {
        return view('livewire.dashboard.index')->layout('layouts.dashboard.app')->layoutData([
            'title' => 'Dashboard'
        ]);
    }
}
