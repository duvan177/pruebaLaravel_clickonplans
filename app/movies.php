<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    protected $fillable = ['id' , 'name' , 'release_date', 'status','synopsis'];
  public $timestamps = false;

}
