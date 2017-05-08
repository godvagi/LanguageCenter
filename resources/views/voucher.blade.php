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
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
          <?php $num=0; ?>
          @foreach($pro as $p)
          @if($p->active == 1)
          @if($num==0)
            <li data-target="#main-slider" data-slide-to="{{$num}}" class="active"></li>
          @else
            <li data-target="#main-slider" data-slide-to="{{$num}}"></li>
          @endif
            <?php $num+=1; ?>
            @else
            @endif
            @endforeach
        </ol>
        <div class="carousel-inner">
          <?php $count=0; ?>
          @foreach($pro as $p)
          @if($p->active == 1)
          @if($count==0)
            <div class="item active"  style="background-image: url(images/slider/bg1.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                    	<div class="col-sm-12">
                    		<img src="{{$p->img}}" class="img-responsive">
                    	</div>
                    </div>
                </div>
            </div><!--/.item-->
            @else
            <div class="item"  style="background-image: url(images/slider/bg1.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                    	<div class="col-sm-12">
                    		<img src="{{$p->img}}" class="img-responsive">
                    	</div>
                    </div>
                </div>
            </div><!--/.item-->
            @endif
            <?php $count+=1; ?>
            @else
            @endif
            @endforeach

        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->

<div class="container">
    <form action="/exchange" method="post">
      <input type='hidden' name='_token' value="{{ csrf_token() }}">
      <input type='hidden' name='username' value="{{$username}}">

      @foreach($user as $u)
      <label>point:{{$u->point}}</label>
      <input type='hidden' name='point' value="{{$u->point}}">
      @endforeach
      <span class="dropdown">
       <select class="btn btn-default dropdown-toggle"  name="promotion" id="promotion" data-toggle="dropdown">Select Promotion
       <span class="caret"></span>
       @foreach($pro as $p)
         <option>{{$p->name}}</option>
      @endforeach
      </select>
      <button type="submit"  class="btn btn-success" >แลก</button>
    </form>
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
