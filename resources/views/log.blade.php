<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Corlate</title>

	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">


            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<!--         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> -->

        <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->



</head><!--/head-->
<body class="homepage">

@extends('layouts._navbar')
@section('content1')
    <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                  <form action="/loginme" method="get" class="login-form" role='form' id="form_log">
                    <input type='hidden' name='_token' value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Login to our site</h3>
                                    <p>Enter your username and password to log on:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="form-bottom">

                                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                      <label class="sr-only" for="form-Email">Email</label>

                                      <center><div class="col-md-6">
                                          <input id="email" type="email" class="form-email form-control" placeholder="Email..." name="email" value="{{ old('email') }}" required autofocus>

                                          @if ($errors->has('email'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                    <br>  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label class="sr-only" for="form-password">Password</label>
                          <div class="col-md-6">
                              <input id="password" type="password" placeholder="Password..."  class="form-password form-control" name="password" required>

                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <!-- <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                              </label>
                          </div>
                      </div>
                  </div> -->
                                    <br><input type='submit' class="btn btn-primary" name='login' value='Sign in!'>


                            </div>
                        </div>
                    </div>
                  </form>
                </div>
            </div>

        </div>

@stop


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- create Button -->





</body>
</html>
