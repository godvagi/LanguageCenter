<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login(Request $request)
    {
      $this->validate($request, [
          'email' => 'required|email',
          'password' => ' required'
        ]);
      $form = $request->all();
      if(Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
      ]))
      {
        $user =\App\User::where('email','=',$form['email'])->first();

        if($user->is_admin()){
          return redirect()->route('admin');
        }
        return redirect()->route('student');
      }


      return redirect()->back();

    }


}
