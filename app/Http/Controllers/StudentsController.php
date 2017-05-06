<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
  private $api = "http://languagecenter.dev/api/";

  public function __construct()
    {
      $this->middleware('auth', [
        'only' => ['create']
        ]);
    }

  public function index()
  {

        return view('admin.student');

  }
}
