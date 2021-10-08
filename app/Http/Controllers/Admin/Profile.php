<?php

namespace App\Http\Controllers\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Tweet;
use App\Models\Follows;
use Illuminate\support\Carbon;

class Profile extends Component
{

    public $user;


    public function mount(User $user){
        $this->user = $user;
    }



    public function store(User $user){
       
        if(auth()->user()->following($user)){
            auth()->user()->unfollow($user);
            notyf()->livewire()->position("y","top")->addSuccess("Unfollow $user->name");

        }
    else{
        Follows::create([
            'user_id' => auth()->user()->id,
            'following_user_id' => $user->id,
            'created_at' =>Carbon::now(),
            'updated_at' => Carbon::now()

        ]);      
          notyf()->livewire()->position("y","top")->addSuccess("Requested To $user->name");
    }
}

    public function render()
    {

        $tweets=Tweet::where('user_id',$this->user->id)->latest()->get();
        return view('admin.profile',compact('tweets'))->extends('layouts.master');
    }
}
