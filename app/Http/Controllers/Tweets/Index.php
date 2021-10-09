<?php

namespace App\Http\Controllers\Tweets;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Tweet;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\Likes;
use App\Models\User;
class Index extends Component
{
    use WithFileUploads;

    public $photos;
    public $body;
    public function tweets(){
    
         
       $this->Validate([
            'photos' =>'image|max:6144',
            'body'=>'required|max:255'
        ]);
        $FileUpload=\Str::random(10).'.'.$this->photos->getClientOriginalExtension();
        $this->photos->storeAs('Tweets',$FileUpload,'host');
  
         Tweet::create([
             'user_id' =>auth()->user()->id,
             'photos' =>$FileUpload,
             'body'=>$this->body,
         ]);


    notyf()->livewire()->position("y","top")->dismissible(true)->addSuccess('notification using toastr library');


    }


   
    public function store(Tweet $tweet){
   

       $tweet->like(auth()->user());
        notyf()->livewire()->position("y","top")->addInfo('you liked this tweet');




    }


    public function destroy(Tweet $tweet){
   

        $tweet->dislike(auth()->user());
        notyf()->livewire()->position("y","top")->addInfo('you Disliked this tweet');


    }

  
    public function render()
    {

        $tweets=auth()->user()->timeline();
        $Liked=Likes::where('liked',true)->count();
        $DisLiked=Likes::where('liked',false)->count();
        return view('tweets.index',compact('tweets','Liked','DisLiked'))->extends('layouts.master');
    }
}
