<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $fillable = [
        'name',
        'dob',
        'email',
        'status',
        'category',
        'title',
        'bio',
        'profile_pic'
      ];
      public function getImageAttribute(){
        return $this->profile_pic;
      }
      public function category(){
        return $this->belongsTo('App\dev_cat', 'dev_cat');
      }
}
