<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{


    public $email;
    public $password;
    public $check;


    public function updated($Field){
        $this->ValidateOnly($Field,[
            'email' =>'required|email',
            'password' =>'required|min:8',    
        ]);
    }
    public function Login(){

        $this->Validate([
            'email' =>'required|email',
            'password' =>'required|min:8',
        ]);

        if(\Auth::attempt(['email' => $this->email, 'password' => $this->password])){
           return redirect()->to(route('home'));
        }else{
          $this->check='the email and password does not match.';
        }
    }
    public function render()
    {
        return view('admin.login')->extends('layouts.base');
    }
}
