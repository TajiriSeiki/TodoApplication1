<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable =  ['user_id','title','detail','dead_line'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
