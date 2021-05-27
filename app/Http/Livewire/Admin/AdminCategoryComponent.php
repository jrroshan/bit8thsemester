<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $categoires = Category::paginate(5);
        return view('livewire.admin.admin-category-component',['categories'=>$categoires])->layout('layouts.base');
    }
}
