<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Reserve;
use App\Section;
class reserveController extends BaseController
{
  public function index(Request $r){
    $sub = '';
    $sec = DB::table('sections')
                     ->select('sub_id','email','time_use','time_left')
                     ->where('email','=',$r->input('username'))
                     ->get();
    $obj = DB::table('reserves')
                     ->select('i','id','date','time','status','sub_id')
                     ->get();
    $show = DB::table('reserves')
                     ->select('i','id','date','time','status','sub_id')
                     ->where('status','=',$r->input('username'))
                     ->get();
    return view('reserve1', [
      'sec' => $sec,
      'data' => $obj,
      'sub' => $sub,
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
    $obj->sub_id =   $r->input('sub_id');
    $obj->save();


    $sub =  $r->input('sub_id');
    DB::table('sections')
            ->where('sub_id', '=',$r->input('sub_id'))
            ->where('email', '=',$r->input('username'))
            ->update([
              'time_use' => ($r->input('time_use'))+1,
              'time_left' => ($r->input('time_left'))-1
            ]);

    $sec = DB::table('sections')
            ->select('sub_id','email','time_use','time_left')
            ->where('email','=',$r->input('username'))
            ->get();

    $obj = DB::table('reserves')
                     ->select('i','id','date','time','status','sub_id')
                     ->where('date','=',$r->input('date'))
                     ->where('time','=',$r->input('time'))
                     ->get();
    $show = DB::table('reserves')
                     ->select('i','id','date','time','status','sub_id')
                     ->where('status','=',$r->input('username'))
                     ->get();
    return view('reserve1', [
      'sec' => $sec,
      'data' => $obj,
      'sub' => $sub,
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
    $sub =  $r->input('sub_id');
    $sec = DB::table('sections')
                     ->select('sub_id','email','time_use','time_left')
                     ->where('email','=',$r->input('username'))
                     ->get();
    $obj = DB::table('reserves')
                     ->select('i','id','date','time','status','sub_id')
                     ->where('date','=',$date)
                     ->where('time','=',$time)
                     ->get();
    $show = DB::table('reserves')
                    ->select('i','id','date','time','status','sub_id')
                    ->where('status','=',$username)
                    ->get();

    //$data['obj'] =+ $obj;
    return view('reserve1', [
      'sec' =>  $sec,
      'data' => $obj,
      'show' => $show,
      'sub' => $sub,
      'username' => $username,
      'date' => $date,
      'time' => $time
    ]);

  }
  public function delReserve(Request $r){
    DB::table('reserves')->where('i', '=', $r->input('i'))->delete();

    $date = $r->input('date');
    $time = $r->input('time');
    $username = $r->input('username');
    $sub = $r->input('sub_id');
    DB::table('sections')
            ->where('sub_id', '=',$r->input('sub_id'))
            ->where('email', '=',$r->input('username'))
            ->update([
              'time_use' => ($r->input('time_use'))-1,
              'time_left' => ($r->input('time_left'))+1
            ]);
    $sec = DB::table('sections')
            ->select('sub_id','email','time_use','time_left')
            ->where('email','=',$r->input('username'))
            ->get();
    $obj = DB::table('reserves')
                     ->select('i','id','date','time','status','sub_id')
                     ->where('date','=',$date)
                     ->where('time','=',$time)
                     ->get();
    $show = DB::table('reserves')
                    ->select('i','id','date','time','status','sub_id')
                    ->where('status','=',$username)
                    ->get();

    return view('reserve1', [
      'sec' =>  $sec,
      'data' => $obj,
      'sub' => $sub,
      'show' => $show,
      'username' => $username,
      'date' => $date,
      'time' => $time
    ]);


  }
}
?>
