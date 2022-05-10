<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.categories', [
            'categories' => Category::paginate(5)
        ]);
    }
}
