<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = ['name','point','img','pro_id','code'];
    protected $table = 'vouchers';
}
