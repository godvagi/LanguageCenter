<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPromotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $promotions = \App\Promotion::all();
      return [
          'success' => true,
          'data' => $promotions
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
      $promotion = new \App\Promotion;
      $promotion->name = trim($request->name);
      $promotion->pro_id = $request->pro_id;
      $promotion->startdate = trim($request->startdate);
      $promotion->expdate = trim($request->expdate);
      $promotion->active = $request->active;
      $promotion->point = $request->point;
      $promotion->description = trim($request->descript);
      if (!empty($promotion->name) && $promotion->save()){
        if ($file = $request->file('image')) {
          $filetype = $file->getClientOriginalExtension();
          // $name = time() . $file->getClientOriginalName();
          // $filetype = $request->file('image')->getMimeType();\
          $file->move('images/promotions', "$promotion->id.$filetype");
          $promotion->img = "$promotion->id.$filetype";
          $promotion->save();
        }
          return [
            'success' => true,
            'data' => "Promotion '{$promotion->name}' was saved with id: {$promotion->id}",
            'id' => $promotion->id
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
        //
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
      $promotion = \App\Promotion::find($id);
      if($promotion->active) $promotion->active = 0;
      else $promotion->active = 1;
      $promotion->save();
      return [
          'success' => true,
          'data' => $promotion->active
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $promotion = \App\Promotion::find($id);
      $name = $promotion->img;
      $promotion->delete();
      $path = public_path() . '/images/promotions/' . $name;
      if(file_exists($path)) {
        unlink($path);
      }
      return [
          'success' => true,
          'data' => "Delete success!"
        ];
    }
}
