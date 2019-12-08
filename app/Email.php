<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    
    protected $fillable = ['sender','to','heading','message','id','created_at'];
}
