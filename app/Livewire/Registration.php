<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Registration extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ];
    }

    public function register()
    {
        //call the rules to validate
        $validated = $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->reset(['name', 'email', 'password', 'password_confirmation']);
        session()->flash('success', 'Registration successful! You can now log in.');
    }

    public function render()
    {
        return view('livewire.registration');
    }
}
