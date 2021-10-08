<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\support\Facades\Hash;
use App\Models\User;

class Register extends Component
{
    use WithFileUploads;


    public $FullName;
    public $Email;
    public $Password;

    public $PasswordConfirmation;
    public $Avatars;

    public $UserName;
    public function register(){
     $this->Validate([
         'UserName'=>'required|string|max:20|unique:users|alpha_dash',
         'FullName' =>'required|min:6',
         'Email'=>'required|email|unique:users',
         'Password' =>'required|min:8|same:PasswordConfirmation',
         'Avatars'=>'image|max:6000' 
     ]);

     $Files=\Str::random(20).'.'.$this->Avatars->getClientOriginalExtension();
     $this->Avatars->storeAs('Photos',$Files,'host');
     User::create([
         'username'=>$this->UserName,
         'name'=>$this->FullName,
         'email'=>$this->Email,
         'password'=>Hash::make($this->Password),
         'avatars'=>$Files,
     ]);


     return redirect()->to(route('login'));
     notyf()->livewire()->position("y","button")->addSuccess("successfully Registered");


    }
    public function render()
    {
        return view('admin.register')->extends('layouts.base');
    }
}
