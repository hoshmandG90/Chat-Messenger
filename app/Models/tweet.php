<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Carbon;
use App\Models\Likes;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;


class tweet extends Model
{
   protected $guarded=[];
   protected $table="tweets";

   public $timestamps =true;

   public function user(){
       return $this->belongsTo(User::class);
   }



   public function ScopeWithLikes(Builder $query){

    $query->LeftJoinSub(

        'SELECT tweet_id ,SUM(liked) likes ,SUM(!liked) dislike FROM likes GROUP BY tweet_id ',
        'likes',
        'likes.tweet_id',
        'tweets.id'
    );

   }


  public function like($user =null,$liked = true){
      $this->likes()->updateOrCreate(
          [
              'user_id'=>$user ? $user->id : auth()->user()->id
          ],
          [
        'liked'=>$liked
         ],
         
      );
  }

  
  public function dislike($user =null){
   return $this->like($user,false);
  }

  public function isLikedBy(User $user){
   
  return (bool) $user->likes;

   }

   public function isdisLikedBy(User $user){
   
    return (bool) $user->likes;

   }

   
   public function likes(){
    return $this->hasMany(Likes::class);
  }


  

}
