<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Livewire\Component;

class Dashboard extends Component
{
    public $totalProduct;
    public function render()
    {
        $this->totalProduct = Product::count();
        return view('livewire.user.dashboard')->layout('layouts.app');
    }
}
