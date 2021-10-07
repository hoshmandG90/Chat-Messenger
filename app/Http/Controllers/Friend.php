<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\Follows;

class Friend extends Component
{


    public function render()
    {

        $count_Friend=Follows::count();
        return view('friend',compact('count_Friend'))->extends('layouts.master');
    }
}
