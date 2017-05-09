<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
  protected $fillable = ['email','sub_id','time_left'];
    protected $table = 'sections';
}
