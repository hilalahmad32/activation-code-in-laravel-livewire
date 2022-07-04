<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password;
    public function render()
    {
        return view('livewire.user.auth.register')->layout('layouts.user-app');
    }

    public function resetField()
    {
        $this->name = "";
        $this->email = "";
        $this->password = "";
    }

    public function create()
    {
        $users = new User();
        $this->validate([
            'name' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => ['required', Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()],
        ]);

        $users->name = $this->name;
        $users->email = $this->email;
        $users->password = Hash::make($this->password);
        $result = $users->save();
        if ($result) {
            session()->flash('success', 'Registration Successfully <br> Admin will approve your Registration');
            $this->resetField();
            return redirect(route('users.login'));
        }
    }
}
