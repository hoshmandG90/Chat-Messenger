<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\support\Facades\Hash;
use App\Models\User;
use Illuminate\support\Carbon;

class EditProfile extends Component
{

   

    use WithFileUploads;
    // Edit Profile Properties

    

    public $FullName;
    public $Email;
    public $Password;

    public $PasswordConfirmation;
    public $Avatars;

    public $UserName;
    public $EditBio;

    public $user;
    public function mount(User $user){
        $this->user = $user;

        $this->UserName = $user->username;
        $this->Email=$user->email;
        $this->FullName=$user->name;
        $this->EditBio = $user->bio;
        $this->Avatar = $user->avatars;

    }

    public function SaveUser(User $user){
        $this->Validate([
            'UserName'=>'required|string|max:20|alpha_dash|unique:users,username,'.$this->user->id,
            'FullName' =>'required|min:6',
            'Email'=>'required|email|unique:users,email,'.$this->user->id,
            'Password' =>'required|min:8|max:255|same:PasswordConfirmation',
            'Avatars'=>'image|max:6000,'.$this->user->id,
            'EditBio'=>'required|max:255|min:10|string'
        ]);

        $FileUpload=\Str::random(10).'.'.$this->Avatars->getClientOriginalExtension();
        $this->Avatars->storeAs('Photos',$FileUpload,'host');
        
        $this->user->update([
            'username'=>$this->UserName,
            'name'=>$this->FullName,
            'password'=>Hash::make($this->Password),
            'avatars'=>$FileUpload,
            'bio'=>$this->EditBio,
            'email'=>$this->Email,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        notyf()->livewire()->position("y","top")->addInfo("successfully updated $user->name");

    }
   
    public function render()
    {
        return view('admin.edit-profile')->extends('layouts.master');
    }
}
