<?php

namespace App\Http\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Login extends Component
{
    public $username, $password;
    public function render()
    {
        return view('livewire.admin.auth.login')->layout('layouts.admin-login');
    }

    public function resetField()
    {
        $this->email = "";
        $this->password = "";
    }

    public function login()
    {
        $this->validate([
            'username' => 'required',
            'password' => ['required', Password::min(8)
                ->letters()
                ->numbers()]
        ]);

        $admin = Auth::guard('admin')->attempt(['username' => $this->username, 'password' => $this->password]);
        if ($admin) {
            session()->flash('success', 'Login Successfully');
            $this->resetField();
            return redirect(route('admin.dashboard'));
        } else {
            session()->flash('error', 'Invalid Email and Password');
        }
    }
}
