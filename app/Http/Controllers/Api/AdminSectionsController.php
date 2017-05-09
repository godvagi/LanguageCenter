<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminSectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sections = \App\Section::all();
      return [
          'success' => true,
          'data' => $sections
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
      $section = new \App\Section;
      $user = \App\User::where('email','=',$request->cEmail)->first();
      $sub = \App\Subject::where('sub_id','=',$request->cSubId)->first();
      $section->email = $user->email;
      $section->sub_id = $sub->sub_id;
      $section->time_left = $sub->hour;
      $user->point = $sub->point;
      if ($section->save() && $user->save()){
          return [
            'success' => true,
            'data' => "Section '{$section->email}' was saved with id: {$section->id}",
            'id' => $section->id
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
