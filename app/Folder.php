<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $fillable=array('name','description');
    public function files()
    {
      $this->hasMany('App\File');
    }
}
