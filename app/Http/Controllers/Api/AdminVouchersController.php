<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminVouchersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $voucher = \App\voucher::all();
      return [
          'success' => true,
          'data' => $voucher
      ];

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $voucher = new \App\voucher;
      $voucher->name = trim($request->name);
      $voucher->vou_id = $request->vou_id;
      $voucher->code = $request->code;
      $voucher->point = $request->point;
      if (!empty($voucher->vou_id) && $voucher->save()){
        if ($file = $request->file('image')) {
          $filetype = $file->getClientOriginalExtension();
          // $name = time() . $file->getClientOriginalName();
          // $filetype = $request->file('image')->getMimeType();\
          $file->move('images/vouchers', "$voucher->id.$filetype");
          $voucher->img = "/images/vouchers/$voucher->id.$filetype";
          $voucher->save();
        }
          return [
            'success' => true,
            'data' => "voucher '{$voucher->name}' was saved with id: {$voucher->id}",
            'id' => $voucher->id
        ];
      } else {
          return [
              'success' => false,
              'data' => "Some error occurred"
            ];
      }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $voucher = \App\voucher::where('name','like',"%$id%")->get();
        return [
            'success' => true,
            'data' => $voucher
          ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // $voucher = \App\voucher::find($id);
      // if($voucher->active) $voucher->active = 0;
      // else $voucher->active = 1;
      // $voucher->save();
      // return [
      //     'success' => true,
      //     'data' => $voucher->active
      //   ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $voucher = \App\voucher::find($id);
      $name = $voucher->img;
      $voucher->delete();
      $path = public_path() . '/images/vouchers/' . $name;
      if(file_exists($path)) {
        unlink($path);
      }
      return [
          'success' => true,
          'data' => "Delete success!"
        ];
    }
}
