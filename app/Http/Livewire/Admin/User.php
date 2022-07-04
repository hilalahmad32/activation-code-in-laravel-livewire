<?php

namespace App\Http\Livewire\Admin;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{
    public $search;
    public function render()
    {
        if ($this->search != "") {
            $users = ModelsUser::orderBy('created_at', 'desc')->where('name', 'LIKE', '%' . $this->search . '%')->get();
            return view('livewire.admin.user', compact('users'))->layout('layouts.admin-app');
        }
        $users = ModelsUser::orderBy('created_at', 'desc')->get();
        return view('livewire.admin.user', compact('users'))->layout('layouts.admin-app');
    }

    public function delete($id)
    {
        $products = ModelsUser::findOrFail($id)->delete();
        if ($products) {
            session()->flash('success', 'User Delete Successfully');
        }
    }

    public function approved($id)
    {
        $users = ModelsUser::findOrFail($id);
        $users->status = 1;
        $result = $users->save();
        if ($result) {
            session()->flash('success', 'User Approved Successfully');
        }
    }

    public function disApproved($id)
    {
        $users = ModelsUser::findOrFail($id);
        $users->status = 0;
        $result = $users->save();
        if ($result) {
            session()->flash('success', 'User DisApproved Successfully');
        }
    }
}
