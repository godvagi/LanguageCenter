<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSectionsController extends Controller
{
  private $api = "http://languagecenter.dev/api/";

  public function __construct()
    {
      $this->middleware('auth', [
        'only' => ['create']
        ]);
      $this->middleware('admin');
    }

  public function index()
  {

        return view('admin.user');

  }
}
