<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = \App\User::where('email','=','s@s.com')->first();
      $std = new \App\Section;
      $std->user_id = $user->id;
      $std->course_id = 1;
      if ($std->save()){
          return [
            'success' => true,
            'data' => "Student '{$std->email}' was saved with id: {$std->id}",
            'id' => $std->id
        ];
      } else {
          return [
              'success' => false,
              'data' => "Some error occurred"
            ];
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = \App\User::where('email','=',trim($request->email))->first();
        $std = new \App\Section;
        $std->user_id = $user->id;
        $std->course_id = $request->courseID;
        if ($std->save()){
            return [
              'success' => true,
              'data' => "Student '{$std->email}' was saved with id: {$std->id}",
              'id' => $std->id
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
        //
    }
}
