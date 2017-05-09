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


       <center>
        <h2>จองเวลาเรียน</h2><br>

         <!-- header -->
         <form action="/reserve" method="get">
           @if($date=='' || $time=='')
           <?php $s='block'; ?>
           <?php $n='none'; ?>
           @elseif($date!='' && $time!='')
           <?php $s='none'; ?>
           <?php $n='block'; ?>
           @endif

           <!-- s section -->
           <div style="display : {{$s}}">
           <input type='hidden' name='_token' value="{{ csrf_token() }}">
           <label class="mr-sm-2" id="label" for="inlineFormCustomSelect" >วิชา</label>&nbsp&nbsp&nbsp
           <span class="dropdown">
           <select class="btn btn-default dropdown-toggle"  name="sub_id" id="sub_id" data-toggle="dropdown">วิชา
           <span class="caret"></span>
            @foreach($sec as $s)
            <option selected>{{$s->sub_id}}</option>
            @endforeach
          </select>
           <label class="mr-sm-2"  id="label" for="inlineFormCustomSelect">วันที่</label>&nbsp&nbsp&nbsp
       <input id="date" class="btn btn-default dropdown-toggle" type="date" name="date">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       <label class="mr-sm-2" id="label" for="inlineFormCustomSelect" >เวลา</label>&nbsp&nbsp&nbsp
       <span class="dropdown">
        <select class="btn btn-default dropdown-toggle"  name="time" id="time" data-toggle="dropdown">Select Time
        <span class="caret"></span>
         <option selected value="">Choose...</option>
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

       <input type='hidden' name='username' value="{{Auth::user()->email}}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       <button type="submit"  class="btn btn-success" onclick="">ค้นหา</button><br><br><br>
     </div>

</form>

<form action="/reserveindex" method="get">
  <input type='hidden' name='_token' value="{{ csrf_token() }}">
  <div style="display : {{$n}}">
    <label class="mr-sm-2" id="label">วันที่: {{$date}}</label>&nbsp&nbsp&nbsp
    <label class="mr-sm-2" id="label">เวลา: {{$time}}</label>&nbsp&nbsp&nbsp
    <button type="submit"  class="btn btn-success" >ยกเลิก</button><br><br><br>
  </div>

</form>
<!-- end header -->

<!-- seats -->
<form action="/reserveme" method="post" style="display :{{$n}}">
  <input type='hidden' name='_token' value="{{ csrf_token() }}">
  <input type='hidden' name='username' value="{{Auth::user()->email}}">
  <input type='hidden' name='date' value="{{$date}}">
  <input type='hidden' name='time' value="{{$time}}">
  <input type='hidden' name='sub_id' value="{{$sub}}">
  @foreach($sec as $s)
  @if($sub == $s->sub_id)
  <input type='hidden' name='time_use' value="{{$s->time_use}}">
  <input type='hidden' name='time_left' value="{{$s->time_left}}">
  @endif
  @endforeach
         @foreach($num as $k)
           @if(count($data)>($count))
           @if( $data[$count]->status != '' && $data[$count]->id == $k )

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
  <?php $total=0; ?>
  @foreach($sec as $t)
  @if($sub == $t->sub_id)
  <?php  $total += $t->time_left ;?>
  @endif
  @endforeach
  <div class="container" id="label">
    <label id="table_time">Time left : {{$total}}</label>
    <div class="row">
      <table class='table table-condensed'>
        <tr>
          <td>
            เลขที่นั่ง
          </td>
          <td>
            รหัสคอร์ส
          </td>
          <td>
            วันที่
          </td>
          <td>
            เวลา
          </td>
          <td>
            หมายเหตุ
          </td>
        </tr>
        @foreach($show as $key)
        @if($key->status == $username)
        <tr>
          <td>
            {{$key->id}}
          </td>
          <td>
            {{$key->sub_id}}
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
                <input type='hidden' name='username' value="{{Auth::user()->email}}">
                <input type='hidden' name='date' value="{{$date}}">
                <input type='hidden' name='time' value="{{$time}}">
                <input type='hidden' name='sub_id' value="{{$key->sub_id}}">
                @foreach($sec as $s)
                @if($sub == $s->sub_id)
                <input type='hidden' name='time_use' value="{{$s->time_use}}">
                <input type='hidden' name='time_left' value="{{$s->time_left}}">
                @endif
                @endforeach
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

<script>
  function cancle() {
    // var div = document.getElementById('seat');
    //   if (div.style.display !== 'none' ) {
    //     div.style.display = 'none';
    //   }
    //   else {
    //     div.style.display = 'block';
    //   }
    // if(document.getElementById('time').value=='' || document.getElementById('date').value==''){
    //   alert('none');
    // }
    return
    };
 </script>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- create Button -->




</body>
</html>
