<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Reserve;
use Illuminate\Support\Facades\DB;
class loginController extends BaseController
{
  public function index(Request $r){
    return view('log',[
      'username' => $r->input('username')
    ]);
  }
  public function login(Request $r){
    $users = DB::table('users')->get();
    foreach ($users as $key ) {
      if($key->email == $r->input('email') && $key->password == $r->input('password')){

        $obj = DB::table('reserve')
                         ->select('i','id','date','time','status')
                         ->get();

        $show = DB::table('reserve')
                        ->select('i','id','date','time','status')
                        ->where('status','=',$r->input('email'))
                        ->get();
      $username =  $r->input('email');
      return view('index',[
        'username' => $username,
        'show' => $show,
        'date' => '',
        'time' => '',
        'data' => $obj
      ]);
      }
    }
  }
}
?>
