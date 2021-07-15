<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BelongsToGroup extends Model
{
    protected $fillable =  ['user_id','group_id'];
}
