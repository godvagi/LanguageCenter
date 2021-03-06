<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class homesController extends BaseController
{
  public function index(Request $r){
    $promo = DB::table('promotions')
                ->select('pro_id','name','point','img','active','startdate','expdate')
                ->get();
    return view('index',[
      
      'pro' => $promo
    ]);
  }
}
?>
