<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;

    public $q;
    public $sortBy = 'id';
    public $sortAsc = true;
    public $category;

    public $confirmingCategoryDeletion = false;
    public $confirmingCategoryAdd = false;

    protected $rules = [
        'category.name' => 'required|string|min:4'
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

    public function confirmCategoryDeletion($id)
    {
        $this->confirmingCategoryDeletion = $id;
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();
        $this->confirmingCategoryDeletion = false;
    }

    public function confirmingCategoryAdd()
    {
        $this->reset(['category']);
        $this->confirmingCategoryAdd = true;
    }

    public function saveCategory()
    {
        $this->validate();

        if(isset($this->category->id)) {
            $this->category->save();
        }
        else {
            Category::create([
                'name' => $this->category['name'],
                'slug' => Str::slug($this->category['name'])
            ]);
        }

        $this->confirmingCategoryAdd = false;
    }

    public function confirmingCategoryEdit(Category $category)
    {
        $this->category = $category;
        $this->confirmingCategoryAdd = true;
    }

    public function render()
    {
        $categories = Category::when($this->q, function($query) {
            return $query->where('name', 'like', '%'. $this->q . '%');
        })
        ->orderBY($this->sortBy, $this->sortAsc ? 'ASC' : 'DESC')
        ->paginate(5);

        return view('livewire.admin.categories', [
            'categories' => $categories
        ])->layout('layouts.admin');
    }
}
