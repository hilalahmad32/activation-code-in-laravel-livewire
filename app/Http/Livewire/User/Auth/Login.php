<?php

namespace App\Http\Livewire\User\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;
    public function render()
    {
        return view('livewire.user.auth.login')->layout('layouts.user-app');
    }

    public function resetField()
    {
        $this->email = "";
        $this->password = "";
    }

    public function login()
    {
        $this->validate([
            'email' => 'required',
            'password' => ['required', Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()],
        ]);

        $user = Auth::attempt(['email' => $this->email, 'password' => $this->password]);
        if ($user) {
            $users = Auth::user()->status;
            if ($users == 1) {
                session()->flash('success', 'Login Successfully');
                $this->resetField();
                return redirect(route('users.dashboard'));
            } else {
                session()->flash('error', 'You are not approved');
            }
        } else {
            session()->flash('error', 'Invalid Email and Password');
        }
    }
}
