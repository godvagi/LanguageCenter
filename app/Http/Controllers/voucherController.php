<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Voucher;
use PDF;
use Illuminate\Support\Facades\Auth;
class voucherController extends BaseController
{

    public function getVoucher(Request $r){
      $promo = DB::table('promotions')
                  ->select('pro_id','name','point','img','active','startdate','expdate')
                  ->get();
      $user = DB::table('users')
                  ->select('point')
                  ->where('email','=',Auth::user()->email)
                  ->get();
      return view('voucher',[
        'username' => Auth::user()->email,
        'user' => $user,
        'pro' => $promo
      ]);
    }

    public function exchange(Request $r){

      $promo = DB::table('promotions')
                  ->select('pro_id','name','point','active','startdate','expdate')
                  ->where('name','=',$r->input('promotion'))
                  ->get();
      $pro = DB::table('promotions')
                  ->select('pro_id','name','active','point')
                  ->get();

      foreach ($promo as $k) {
      $point = $k->point;
      if($r->input('point')>=$point){

      $obj = new Voucher();
      $obj->pro_id = $k->pro_id;
      $obj->code = '';
      $obj->save();

      $vouchers = DB::table('vouchers')
                    ->select('id','pro_id')
                    ->max('id');

      $update =  DB::table('users')
                    ->select('point')
                    ->where('email','=',Auth::user()->email)
                    ->update([
                      'password' => '1234',
                      'point' => (($r->input('point'))-($point)) ,
                    ]);

      $proid = $k->pro_id;
      $startdate = $k->startdate;
      $expdate = $k->expdate;

      $user = DB::table('users')
                  ->select('point')
                  ->where('email','=',Auth::user()->email)
                  ->get();

      $pdf=PDF::loadView('pdf.barcode',[
        'voucher' => $vouchers,
        'username' => Auth::user()->email,
        'pro_id' => $proid,
        'point' => $point,
        'startdate' =>$startdate,
        'expdate' =>$expdate
      ]);
      // $pdf->download('voucher.pdf');
      return $pdf->download('voucher.pdf');
      // return view('voucher',[
        // 'username' => $r->input('username'),
        // 'user' => $user,
        // 'pro' => $pro
        // 'pdf' => $pdf->download('voucher.pdf')
      // ]);
    }else{
      $promo = DB::table('promotions')
                  ->select('pro_id','name','point','img','active','startdate','expdate')
                  ->get();
      $user = DB::table('users')
                  ->select('point')
                  ->where('email','=',Auth::user()->email)
                  ->get();
      return view('voucher',[
        'username' => Auth::user()->email,
        'user' => $user,
        'pro' => $promo,
        'point' => $point
      ]);
    }
  }
    }



}
