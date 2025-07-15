<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendForgotPasswordEmail;

class ForgotPassword extends Component
{
    public $email;

    public function sendResetLink(){
        $this->validate([
            'email' => 'required|email',
        ]);

        //check if the user name exist
        $user = User::where('email',$this->email)->first();
        if(!$user){ //if user does not exist don't send email
            return redirect()->route('login')->with('success','Email is being sent if user exists');
        }
        // Generate token
        $token = \Str::random(64);
        $hashedToken = hash('sha256',$token);
        //store in the password_reset_tokens table
        \DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $this->email], //checks if the email exists
            [
                'token' => $hashedToken,
                'created_at' => now()
            ]
        );
        //send email
        Mail::to($this->email)->send(new SendForgotPasswordEmail($this->email,$hashedToken));
         return redirect()->route('login')->with('success','Email is being sent if user exists');
    }
    public function render()
    {
        return view('livewire.forgot-password');
    }
}
