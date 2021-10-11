<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\User;
use App\Models\Follows;
use Illuminate\support\Carbon;
use App\Models\message as Messages;
use App\Models\replay_message;

use Livewire\WithFileUploads;

class Message extends Component
{


    use WithFileUploads;
    public $user;

    public $message;
    public $photos;
    public $FileUpload;

    public function mount(User $user){
        $this->user= $user;
    }

    public function store(){
    
      
        if ($this->photos) {
            $this->FileUpload=\Str::random(10).'.'.$this->photos->getClientOriginalExtension();
            $this->photos->storeAs('message',$FileUpload,'host');
    
        }
      

        Messages::create([
            'username' => auth()->user()->username,
            'following_user_id'=>$this->user->username,
            'photos' => $this->FileUpload,
            'text'=>$this->message,
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);

        return redirect()->back();
        $this->clear();
    }
    private function clear(){
        $this->message = '';
    }
    public function render()
    {

        $messages=Messages::orderBy('created_at','ASC')->get();
        $replay_message=replay_message::orderBy('created_at','ASC')->get();
        return view('message',compact('messages','replay_message'))->extends('layouts.master');
    }
}
