<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;
use Livewire\WithFileUploads;

class Register extends Component
{
    public $name, $email, $password, $profile, $username;
    use WithFileUploads;
    public function render()
    {
        return view('livewire.user.auth.register')->layout('layouts.user-app');
    }

    public function resetField()
    {
        $this->name = "";
        $this->email = "";
        $this->password = "";
        $this->profile = "";
        $this->username = "";
    }

    public function create()
    {

        $users = new User();
        $this->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => ['required', Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()],
            'profile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $filename = "";
        if ($this->profile != "") {
            $filename = $this->profile->store('users', 'public');
        } else {
            $filename = "null";
        }
        $users->name = $this->name;
        $users->email = $this->email;
        $users->username = $this->username;
        $users->password = Hash::make($this->password);
        $users->profile = $filename;
        $result = $users->save();
        if ($result) {
            session()->flash('success', 'Registration Successfully <br> Admin will approve your Registration');
            $this->resetField();
            return redirect(route('users.login'));
        }
    }
}
