<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Profile;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ProfilePage extends Component
{
    use WithFileUploads;

    public $name;
    public $mobile;
    public $image;
    public $profile;

    protected $rules = [
        'name' => 'required|string|max:255',
        'mobile' => 'nullable|numeric',
        'image' => 'nullable|image|max:2048',
    ];

    public function mount()
    {
        $this->profile = Auth::user()->profile;
        if ($this->profile) {
            $this->mobile = $this->profile->phone;
        }
        $this->name = Auth::user()->name;
            
    }

    public function updateProfile()
    {
        $this->validate();

        $user = Auth::user();
        $user->update([
            'name' => $this->name,
        ]);
        $profile = Profile::where('user_id',$user->id)->first();
        if($profile){
            $profile->update([
                'phone' => $this->mobile,
            ]);
        }else{
            $profile  = new Profile;
            $profile->phone = $this->mobile;
            $profile->user_id = $user->id;
            $profile->save();
        }
        // if ($this->image) {
        //     $imagePath = $this->image->store('profile-images', 'public');
        //     $profile->image = $imagePath;
        //     $profile->save();
        // }

        session()->flash('success', 'Profile updated successfully!');
    }

    public function render()
    {
        return view('livewire.profile-page');
    }
}
