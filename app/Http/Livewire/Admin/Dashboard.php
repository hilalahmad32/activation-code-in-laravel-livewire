<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $totalProduct;
    public $users;
    public function render()
    {
        $this->totalProduct = Product::count();
        $this->users = User::count();
        return view('livewire.admin.dashboard')->layout('layouts.admin-app');
    }
}
