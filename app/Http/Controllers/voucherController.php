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
class voucherController extends BaseController
{

    public function getVoucher(Request $r){
      $pro = DB::table('promotion')
                  ->select('pro_id','name','point')
                  ->get();
      $user = DB::table('users')
                  ->select('point')
                  ->where('email','=',$r->input('username'))
                  ->get();
      return view('voucher',[
        'username' => $r->input('username'),
        'user' => $user,
        'pro' => $pro
      ]);
    }
    public function exchange(Request $r){

      $promo = DB::table('promotion')
                  ->select('pro_id','name','point')
                  ->where('name','=',$r->input('promotion'))
                  ->get();
      $pro = DB::table('promotion')
                  ->select('pro_id','name','point')
                  ->get();

      foreach ($promo as $k) {
        $obj = new Voucher();
        $obj->pro_id = $k->pro_id;
        $obj->code = '';
        $obj->save();

      $vouchers = DB::table('voucher')
                    ->select('id','pro_id')
                    ->max('id');

      $update =  DB::table('users')
                    ->select('point')
                    ->where('email','=',$r->input('username'))
                    ->update([
                      'point' =>  (($r->input('point'))-($k->point)) ,
                    ]);
      $point = $k->point;
      $proid = $k->pro_id;
      }
      $user = DB::table('users')
                  ->select('point')
                  ->where('email','=',$r->input('username'))
                  ->get();

      $pdf=PDF::loadView('pdf.barcode',[
        'voucher' => $vouchers,
        'username' => $r->input('username'),
        'pro_id' => $proid,
        'point' => $point
      ]);
      return $pdf->download('voucher.pdf');
      // return view('voucher',[
      //   'username' => $r->input('username'),
      //   'user' => $user,
      //   'pro' => $pro
      // ]);
    }


}
