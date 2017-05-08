<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminVouchersController extends Controller
{
  private $api = "http://languagecenter.dev/api/";

  public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('admin');
    }

  public function index()
  {
        return view('admin.voucher');

  }
}
