<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Carbon;

class tweet extends Model
{
   protected $guarded=[];
   protected $table="tweets";

   public $timestamps =true;

   public function user(){
       return $this->belongsTo(User::class);
   }
}
