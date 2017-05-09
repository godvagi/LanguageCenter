<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminSubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = \App\Subject::all();
        return [
          'success' => true,
          'data' => $subjects
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
      $subject = new \App\Subject;
      $subject->name = trim($request->name);
      $subject->sub_id = $request->sub_id;
      $subject->type = trim($request->type);
      $subject->price = $request->price;
      $subject->hour = $request->hour;
      $subject->point = $request->point;
      $subject->description = trim($request->description);
      if (!empty($subject->sub_id) && $subject->save()){

          return [
            'success' => true,
            'data' => "Subject '{$subject->name}' was saved with id: {$subject->id}",
            'id' => $subject->id
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
      $subject = \App\Subject::where('name','like',"%$id%")->get();
      return [
          'success' => true,
          'data' => $subject
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
      if ($file = $request->file('image2')) {
      $path = public_path() . '/images/course-table.png';
      if(file_exists($path)) {
        unlink($path);
      }
        $filetype = $file->getClientOriginalExtension();
        $file->move('images', "course-table.png");
        return [
            'success' => true,
            'data' => $id
          ];
      }
      return [
        'success' => $request->hasfile('image2')
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
      $subject = \App\Subject::where('sub_id','=',$id)->delete();
      return [
          'success' => true,
          'data' => "Delete success!"
        ];
    }
}
