<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\User;
use App\Models\Follows;
use Illuminate\support\Carbon;

class Friend extends Component
{




    public function store(User $user){
   

        Follows::create([
            'user_id'=>auth()->user()->id,
            'following_user_id'=>$user->id,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        notyf()->livewire()->position("y","top")->addSuccess("Requested To $user->name");


    }

    public function render()
    {

    $users=User::latest()->get();
        return view('friend',compact('users'))->extends('layouts.master');
    }
}
