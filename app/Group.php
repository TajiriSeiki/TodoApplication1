<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable =  ['name','detail','password','groups_user_id'];
    
    public function user(){
        $this->hasMany(User::class);
    }
}
