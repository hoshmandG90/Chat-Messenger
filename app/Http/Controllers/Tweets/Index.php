<?php

namespace App\Http\Controllers\Tweets;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Tweet;
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
    public function render()
    {

        $tweets=auth()->user()->timeline();
        return view('tweets.index',compact('tweets'))->extends('layouts.master');
    }
}
