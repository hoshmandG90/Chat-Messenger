<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\User;
use App\Models\Follows;
use Illuminate\support\Carbon;
use Livewire\WithPagination;
class Message extends Component
{
    public function render()
    {
        $users=auth()->user()->follows();
        return view('message',compact('users'))->extends('layouts.master');
    }
}
