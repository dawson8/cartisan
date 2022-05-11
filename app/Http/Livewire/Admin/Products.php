<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public $q;
    public $sortBy = 'id';
    public $sortAsc = true;
    public $product;
    public $checked = [];
    public $selectPage = false;
    public $selectAll = false;

    public $confirmingProductDeletion = false;
    public $confirmingProductAdd = false;

    protected $rules = [
        'product.name' => 'required|string|min:4',
        'product.description' => 'nullable|string',
        'product.price' => 'required|numeric'
    ];

    public function updatingQ()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($field === $this->sortBy) {
            $this->sortAsc = !$this->sortAsc;
        }

        $this->sortBy = $field;
    }

    public function confirmProductDeletion($id)
    {
        $this->confirmingProductDeletion = $id;
    }

    public function deleteProduct(Product $product)
    {
        $product->delete();
        $this->confirmingProductDeletion = false;
    }

    public function confirmingProductAdd()
    {
        $this->reset(['product']);
        $this->confirmingProductAdd = true;
    }

    public function saveProduct()
    {
        $this->validate();

        if(isset($this->product->id)) {
            $this->product->save();
        }
        else {
            Product::create([
                'name' => $this->product['name'],
                'slug' => Str::slug($this->product['name']),
                'description' => $this->product['description'] ?? null,
                'price' => $this->product['price']
            ]);
        }

        $this->confirmingProductAdd = false;
    }

    public function confirmingProductEdit(Product $product)
    {
        $this->product = $product;
        $this->confirmingProductAdd = true;
    }

    public function updatedSelectPage($value)
    {
        // dd('ok');
        if($value) {
            $this->products->pluck('id')->map(fn($item) => (string) $item)->toArray();
        } else {
            $this->checked = [];
        }
    }

    public function updatedChecked()
    {
        $this->selectPage = false;
    }

    public function selectAll()
    {
        $this->selectAll = true;
        $this->checked = $this->productsQuery->pluck('id')->map(fn($item) => (string) $item)->toArray();
    }

    public function getProductsProperty()
    {
        return $this->productsQuery->paginate(5);
    }

    public function getProductsQueryProperty()
    {
        return Product::when($this->q, function($query) {
            return $query->where('name', 'like', '%'. $this->q . '%')
                ->orWhere('price', 'like', '%' . $this->q . '%');
        })
        ->orderBY($this->sortBy, $this->sortAsc ? 'ASC' : 'DESC');
    }

    public function isChecked($product_id)
    {
        return in_array($product_id, $this->checked);
    }

    public function updatedSelectedClass($class_id)
    {
        // $this->sections =
    }

    public function render()
    {
        return view('livewire.admin.products', [
            'products' => $this->products
        ])->layout('layouts.admin');
    }
}
