<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Followable;
// models
use App\Models\Tweet;
use App\Models\Likes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //   'username',
    //   'avatar',
    //   'name',
    //   'email',
    //   'password',
    // ]; same as
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      'password',
      'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
      if($value)
      {
        return asset('storage/'.$value);
      }

      return 'https://st3.depositphotos.com/4111759/13425/v/600/depositphotos_134255634-stock-illustration-avatar-icon-male-profile-gray.jpg';
    }

    public function setPasswordAttribute($value)
    {
      $this->attributes['password'] = bcrypt($value);
    }

    public function timeline()
    {
      // include users and followers tweets
      $friends = $this->follows()->pluck('id');

      return Tweet::whereIn('user_id', $friends)
        ->orWhere('user_id', $this->id)
        ->withLikes()
        ->latest()
        ->paginate(50);
    }

    public function tweets()
    {
      return $this->hasMany(Tweet::class)->latest();
    }

    public function path($append = '')
    {
      $path = route('profile', $this->username);

      return $append ? "{$path}/{$append}" : $path;
    }

    public function likes()
    {
      return $this->hasMany(Like::class);
    }
}
