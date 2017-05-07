<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Reserve;
class reserveController extends BaseController
{
  public function index(Request $r){
    $obj = DB::table('reserve')
                     ->select('i','id','date','time','status')
                     ->get();
    $show = DB::table('reserve')
                     ->select('i','id','date','time','status')
                     ->where('status','=',$r->input('username'))
                     ->get();
    return view('reserve1', [
      'data' => $obj,
      'show' => $show,
      'username' => $r->input('username'),
      'date' => '',
      'time' => ''
    ]);
  }
  public function reserve(Request $r){

    $obj = new Reserve();
    $obj->id = $r->input('id');
    $obj->date = $r->input('date');
    $obj->time = $r->input('time');
    $obj->status =   $r->input('username');
    $obj->save();
    $obj = DB::table('reserve')
                     ->select('i','id','date','time','status')
                     ->where('date','=',$r->input('date'))
                     ->where('time','=',$r->input('time'))
                     ->get();
    $show = DB::table('reserve')
                     ->select('i','id','date','time','status')
                     ->where('status','=',$r->input('username'))
                     ->get();
    return view('reserve1', [
      'data' => $obj,
      'show' => $show,
      'username' => $r->input('username'),
      'date' => '',
      'time' => ''
    ]);
    //$checkserve = DB::table('reserve')->where(['id'=>$id , 'date'=>$date , 'time'=>$time ,'status'=>$username]);

  }
  public function showReserve(Request $r){

    $date = $r->input('date');
    $time = $r->input('time');
    $username = $r->input('username');
    $obj = DB::table('reserve')
                     ->select('i','id','date','time','status')
                     ->where('date','=',$date)
                     ->where('time','=',$time)
                     ->get();
    $show = DB::table('reserve')
                    ->select('i','id','date','time','status')
                    ->where('status','=',$username)
                    ->get();

    //$data['obj'] =+ $obj;
    return view('reserve1', [
      'data' => $obj,
      'show' => $show,
      'username' => $username,
      'date' => $date,
      'time' => $time
    ]);

  }
  public function delReserve(Request $r){
    DB::table('reserve')->where('i', '=', $r->input('i'))->delete();

    $date = $r->input('date');
    $time = $r->input('time');
    $username = $r->input('username');

    $obj = DB::table('reserve')
                     ->select('i','id','date','time','status')
                     ->where('date','=',$date)
                     ->where('time','=',$time)
                     ->get();
    $show = DB::table('reserve')
                    ->select('i','id','date','time','status')
                    ->where('status','=',$username)
                    ->get();

    return view('reserve1', [
      'data' => $obj,
      'show' => $show,
      'username' => $username,
      'date' => $date,
      'time' => $time
    ]);


  }
}
?>
