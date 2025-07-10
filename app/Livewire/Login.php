<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;    
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected function rules(){
        return [
            'email' => 'required',
            'password'=>'required'
        ];
    }
    protected function messages(){
        return [
            'email.required' => 'Please enter your login id',
            'password.required' =>'Password cannot be blank'
        ];
    }
    public function login()
{
    $this->validate();

    if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
        session()->regenerate(); // Prevent session fixation
        session()->flash('success', 'Login successful!');
        return redirect()->intended('/'); // Redirect to home or intended page
    } else {
        $this->addError('email', 'Invalid credentials. Please try again.');
    }
}
    public function render()
    {
        return view('livewire.login');
    }
}
