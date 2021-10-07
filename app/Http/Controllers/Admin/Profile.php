<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Tweet;
use App\Models\Follows;
class Profile extends Component
{

    public $user;


    public function mount(User $user){
        $this->user = $user;
    }



    public function store(User $user){
       
        Follows::create([
            'user_id' => auth()->user()->id,
            'following_user_id' => $user->id
        ]);
    }

    public function render()
    {

        $tweets=Tweet::where('user_id',$this->user->id)->latest()->get();
        return view('admin.profile',compact('tweets'))->extends('layouts.master');
    }
}
