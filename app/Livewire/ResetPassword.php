<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;

class ResetPassword extends Component
{
    public $token;
    public $email;
    public $password;
    public $password_confirmation;

    public function mount(Request $request){
        $this->token = $request->token;
        $this->email = $request->email;
        $this->checkToken();
    }

    //check if the token and email match
    public function checkToken(){
        $data = \DB::table('password_reset_tokens')
            ->where('email',$this->email)
            ->where('token',$this->token)->first();
        if(!$data){
            return redirect()->route('login')->with('error','Invalid token');
        }
    }
    public function resetPassword(){
        $this->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        //updates the password
        User::where('email',$this->email)->update([
            'password' => bcrypt($this->password)
        ]);
        
        //delete the token from the table
        \DB::table('password_reset_tokens')->where('email',$this->email)->delete();
        
        return redirect()->route('login')->with('success','Password reset successfully');
    }
    public function render()
    {
        return view('livewire.reset-password');
    }
}
