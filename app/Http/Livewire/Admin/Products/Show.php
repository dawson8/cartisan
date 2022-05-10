<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Component;

class Show extends Component
{
    public $products;
    public $editProductActive = false;

    public function render()
    {
        return view('livewire.admin.products.show');
    }

    public function editProduct(Product $product)
    {
        $this->product = $product;
        $this->editProductActive = true;
        // dd($this->editProductActive);
    }
}
