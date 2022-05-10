<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Items extends Component
{
    use WithPagination;

    public function render()
    {
        $products = Product::paginate(5);

        return view('livewire.admin.products.items', [
            'products' => $products
        ]);
    }

}
