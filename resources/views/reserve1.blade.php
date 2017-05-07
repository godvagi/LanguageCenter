<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Reserve | Corlate</title>

	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
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
    <link href="css/form-reserve.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head><!--/head-->

<body  onload="createButton()">

    @extends('layouts._navbar')

    @section('content1')

       <center>

         <form action="/reserve" method="get">
           <input type='hidden' name='_token' value="{{ csrf_token() }}">
           <label class="mr-sm-2"  id="label" for="inlineFormCustomSelect">วันที่</label>&nbsp&nbsp&nbsp
       <input class="btn btn-default dropdown-toggle" type="date" name="date">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       <label class="mr-sm-2" id="label" for="inlineFormCustomSelect" >เวลา</label>&nbsp&nbsp&nbsp
       <span class="dropdown">
        <select class="btn btn-default dropdown-toggle"  name="time" id="time" data-toggle="dropdown">Select Time
        <span class="caret"></span>
         <option selected>Choose...</option>
          <option>09.00-10.00</option>
          <option>10.00-11.00</option>
          <option>11.00-12.00</option>
          <option>12.00-13.00</option>
          <option>13.00-14.00</option>
          <option>14.00-15.00</option>
          <option>15.00-16.00</option>
          <option>16.00-17.00</option>
       </select>
       <?php
       $num=[1,2,3,4,5,6,7,8,9,10,
             11,12,13,14,15,16,17,18,19,20,
           21,22,23,24,25,26,27,28,29,30];
           $count =0;
       ?>

       <input type='hidden' name='username' value="{{$username}}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       <button type="submit"  class="btn btn-success" onclick="<script>
         toggle() {
           var div = document.getElementById('contains');
             if (div.style.display !== 'none') {
               div.style.display = 'none';
             }
             else {
               div.style.display = 'block';
             }
           };
        </script>">ค้นหา</button><br><br><br>
</form>
<form action="/reserveme" method="post">
  <input type='hidden' name='_token' value="{{ csrf_token() }}">
  <input type='hidden' name='username' value="{{$username}}">
  <input type='hidden' name='date' value="{{$date}}">
  <input type='hidden' name='time' value="{{$time}}">

         @foreach($num as $k)
           @if(count($data)>($count))
           @if( $data[$count]->status != '' && $data[$count]->id == $k )
            <div class="contains" style="display: none;">
         <?php $count+=1; ?>
         <button class="btn btn-danger btn-lg" type="submit"  name='id' id="id" value="{{$k}}" disabled> {{$k}}
           @else
           <button class="btn btn-info btn-lg" type="submit"  name='id' id="id" value="{{$k}}" > {{$k}}
             @endif
             @else
             <button class="btn btn-info btn-lg" type="submit"  name='id' id="id" value="{{$k}}" > {{$k}}
               @endif
               @if($k%10==0)
                </button><br><br><br>
                @endif
               @endforeach
             </div>
</form >
</center>

<main>
  <div class="container">
    <div class="row">
      <table class='table table-condensed'>
        <tr>
          <td>
            ID
          </td>
          <td>
            Date
          </td>
          <td>
            Time
          </td>
          <td>
            Action
          </td>
        </tr>
        @foreach($show as $key)
        @if($key->status == $username)
        <tr>
          <td>
            {{$key->id}}
          </td>
          <td>
            {{$key->date}}
          </td>
          <td>
            {{$key->time}}
          </td>
          <td>
            <form action="/reservedel" method="post" onsubmit"return(confirm('Do you want to delete this?'))">
                <input type='hidden' name='_token' value="{{ csrf_token() }}">
                <input type='hidden' name='i' value="{{$key->i}}">
                <input type='hidden' name='username' value="{{$username}}">
                <input type='hidden' name='date' value="{{$date}}">
                <input type='hidden' name='time' value="{{$time}}">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @endif
          @endforeach
      </table>

    </div>

  </div>
</main>
@endsection


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- create Button -->




</body>
</html>
