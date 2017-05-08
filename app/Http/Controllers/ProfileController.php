<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class profileController extends BaseController
{
  public function index(Request $r){
       $username = Auth::user()->email;
      $user = DB::table('users')
                  ->where('email','=',$username)
                  ->get();
      $sec = DB::table('sections')
                  ->where('email','=',$username)
                  ->get();
      return view('profile',[
         'username'=>$username,
        'user'=>$user,
        'sec' =>$sec
      ]);
  }
  public function changePass(Request $r){
    if($r->input('newpass') == $r->input('confirm') && $r->input('oldpass') == $r->input('pass')){
      $update =  DB::table('users')
                  ->where('email','=',$r->input('username'))
                  ->where('password','=',$r->input('oldpass'))
                  ->update([
                    'password' => $r->input('newpass'),
                  ]);
      $username = $r->input('username');
      $user = DB::table('users')
                  ->where('email','=',$username)
                  ->get();
      $sec = DB::table('sections')
                  ->where('email','=',$username)
                  ->get();
      return view('profile',[
        'username'=>$username,
        'user'=>$user,
        'sec' =>$sec
      ]);
  }else{
    echo $r->input('pass')." ";
    echo $r->input('oldpass')." ";
    echo $r->input('newpass')." ";
    echo $r->input('confirm')." ";
  }
}
}
