<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Tweet;
use App\Models\Follows;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'username',
        'bio',
        'email',
        'password',
        'avatars'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute(){
        return   asset('/upload/Photos/'.$this->avatars.'');
    }

 


    public function tweets(){
        return $this->HasMany(Tweet::class);
    }

    public function follows(){

        return $this->belongsToMany(user::class,'follows','user_id','following_user_id');
    }
    
    public function timeline(){

        $friends =$this->follows->pluck('id');
        return Tweet::whereIn('user_id',$friends)->WithLikes()->OrWhere('user_id',$this->id)->latest()->get();
    }

    public function following(User $user){
        return $this->follows()->where('following_user_id',$user->id)->exists();
    }

    public function unfollow(User $user){
        return $this->follows()->detach($user);
    }

   }



