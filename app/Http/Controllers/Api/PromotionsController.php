<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromotionsController extends Controller
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
      $promotion->startdate = trim($request->startdate);
      $promotion->expdate = trim($request->expdate);
      $promotion->type = trim($request->type);
      $promotion->total = $request->total;
      $promotion->description = trim($request->descript);
      if ($file = $request->file('image')) {
        $name = time() . $file->getClientOriginalName();
        $file->move('images/promotions', $name);
        $promotion->img = $name;
      }
      if (!empty($promotion->name) && $promotion->save()){
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $promotion = \App\Promotion::find($id)->delete();

      return [
          'success' => true,
          'data' => "Delete success!"
        ];
    }
}
