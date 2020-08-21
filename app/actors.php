<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actors extends Model
{
  protected  $fillable = ['id' , 'name' , 'status'];
  public $timestamps = false;
}
