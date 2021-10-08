<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\User;
use App\Models\Follows;
use Illuminate\support\Carbon;
use Livewire\WithPagination;

class Explore extends Component
{



    use WithPagination;
  


    public $limit=10;

    public $search;

    protected $queryString=['search'];
    public function LoadMore(){
        $this->limit+=10;
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
        $friends =auth()->user()->follows()->pluck('id');
    $users=User::where('name','LIKE','%'.$this->search.'%')->latest()->paginate($this->limit);
        return view('explore',compact('users'))->extends('layouts.master');
    }
}
