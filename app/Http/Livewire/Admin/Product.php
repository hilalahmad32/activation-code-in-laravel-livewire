<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product as ModelsProduct;
use Livewire\Component;

class Product extends Component
{

    public $search;
    public function render()
    {
        if ($this->search != "") {
            $products = ModelsProduct::orderBy('created_at', 'desc')->where('product_name', 'LIKE', '%' . $this->search . '%')->get();
            return view('livewire.admin.product', compact('products'))->layout('layouts.admin-app');
        }
        $products = ModelsProduct::orderBy('created_at', 'desc')->get();
        return view('livewire.admin.product', compact('products'))->layout('layouts.admin-app');
    }
    public function delete($id)
    {
        $products = ModelsProduct::findOrFail($id)->delete();
        if ($products) {
            session()->flash('success', 'Product Delete Successfully');
        }
    }
}
