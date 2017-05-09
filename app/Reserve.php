<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{

    protected $fillable = ['i','id','date','time','status','sub_id'];

    protected $table = 'reserve';

}
