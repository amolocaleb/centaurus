<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dev_cat extends Model
{
    protected $fillable = [
        'name'
      ];
      protected $table = 'dev_cat';
      public function developers(){
          return $this->belongsTo('developers', 'dev_cat');
      }
}
