<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
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
		$client = new \GuzzleHttp\Client();
		$call = "course";
		$response = $client->request('GET', "{$this->api}{$call}", [
            'form_params' => []
        ]);
		$resBody = $response->getBody();
		$res = json_decode($resBody);
        return view('admin.course', [
            'statusCode' => $response->getStatusCode(),
            'responseHeader' => $response->getHeader('content-type')[0],
            'success' => $res->success,
            'data' => $res->data,
            'resBody' => $response->getBody()
        ]);

  }
}
