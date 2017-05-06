<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
  public function __construct()
    {
      $this->middleware('auth', [
        'only' => ['create']
        ]);
    }

  public function index()
  {

        return view('admin.course');

  }
}
