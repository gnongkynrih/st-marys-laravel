<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Component
{
    public $current_password;
    public $password;
    public $password_confirmation;

    public function rules(){
        return [
            'current_password' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ];
    }
    public function messages(){
        return [
            'current_password.required' => 'Current password is required',
            'password.required' => 'Password is required',
            'password_confirmation.same' => 'Password does not match',
            'password.min' => 'Password must be at least 6 characters',
        ];

    }
    public function changePassword(){
        try{
            $this->validate(); //validate the input
            //check if the password matches
            if(Hash::check($this->current_password, Auth::user()->password)){
                $user = User::find(Auth::user()->id);
                $user->password = Hash::make($this->password);
                $user->save();
                
                // Auth::user()->update([
                //     'password' => Hash::make($this->password)
                // ]);
                session()->flash('success','Password changed successfully');
            }else{
                session()->flash('error','Current password does not match');
            }
            return redirect()->route('home');
        }catch(Exception $e){
            session()->flash('error','Password does not match');
        }
    }
    public function render()
    {
        return view('livewire.change-password');
    }
}
