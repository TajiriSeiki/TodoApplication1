<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function tasks(){
        return $this->hasMany(Task::class);
    }
    public function groups(){
        return $this->hasMany(Group::class);
    }

    public function belongs_to_groups(){
        return $this -> belongsToMany(Group::class,'belongs_to_groups');
    }

    public function isBelong($group_id){
        return $this->belongs_to_groups()->where('groups.id', $group_id)->exists();
    }
}
