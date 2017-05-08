<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name','sub_id','type','price','hour','point','description'];
}
