<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class HeadSearchComponent extends Component
{
    public $search;
    public $product_cat;
    public $product_cat_id;

    public function mount(){
        $this->product_cat = 'All Category';
        $this->fill(request()->only('search','product_cat','product_cat_id'));
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.head-search-component',['categories'=>$categories]);
    }
}
