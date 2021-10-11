<?php

namespace App\Http\Controllers;

use Livewire\Component;

use App\Models\User;
use App\Models\Follows;
use Illuminate\support\Carbon;
use App\Models\message as Messages;
use App\Models\replay_message;
use Livewire\WithFileUploads;
class ReplayMessage extends Component
{
    use withFileUploads;

    public $user;

    public function mount(User $user){

        $this->user = $user;
    }
    public function render()
    {

        $messages =Messages::latest()->get();
        return view('replay-message',compact('messages'))->extends('layouts.master');
    }
}
