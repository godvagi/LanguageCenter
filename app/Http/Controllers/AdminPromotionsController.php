<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPromotionsController extends Controller
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
      $client = new \GuzzleHttp\Client();
        $call = "promotions";
        $response = $client->request('GET', "{$this->api}{$call}", [
            'form_params' => []
        ]);
        $resBody = $response->getBody();
        $res = json_decode($resBody);
        return view('admin.promotions', [
            'statusCode' => $response->getStatusCode(),
            'responseHeader' => $response->getHeader('content-type')[0],
            'success' => $res->success,
            'data' => $res->data,
            'resBody' => $response->getBody()
        ]);

  }
}
