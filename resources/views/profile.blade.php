




<!DOCTYPE html>
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
      <link href="css/form-profile.css" rel="stylesheet">

            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<!--         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> -->

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->


</head><!--/head-->

<body class="homepage" >

@extends('layouts._navbar')

 @section('content1')


   <br><br>
      <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 wow fadeInDown" id="show">
                   <div class="tab-wrap">
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">ประวัติส่วนตัว</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">เปลี่ยนรหัสผ่าน</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">ข้อมูลการลงทะเยีนเรียน</a></li>

                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1">
                                        <div class="media">
                                           <div class="pull-left">
                                                </div>
                                            <div class="media-body">
                                              @foreach($user as $d)
                                          <label id="label">Firstname : {{$d->name}}</label><br>
                                          <label  id="label">role : {{$d->role}}</label><br>
                                           <label  id="label">E-mail: {{$d->email}}</label><br>
                                          <label  id="label">Point : {{$d->point}}</label><br>
                                           @endforeach
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade" id="tab2">
                                        <div class="media">
                                           <div class="pull-left">

                                            </div>
                                            <div class="media-body">
                                              <form action="/changepass" method="post">
                                                <input type='hidden' name='_token' value="{{ csrf_token() }}">
                                                <input type='hidden' name='username' value="{{$username}}">
                                                @foreach($user as $u)
                                                <input type='hidden' name='pass' value="{{$u->password}}">
                                                @endforeach
                                                 <label id="label">รหัสผ่านเก่า</label><input type="password" name="oldpass"><br>
                                                 <label id="label">รหัสผ่านใหม่</label><input type="password" name="newpass"><br>
                                                 <label id="label">ยืนยันรหัสผ่านใหม่</label><input type="password" name="confirm"><br>
                                                 <button type='submit' class="btn btn-primary">ยืนยัน</button>
                                                </form>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade" id="tab3">
                                        <!-- table --><main>

                                         <?php $count=1; ?>
                                         <div class="container" >

                                           <div class="row" id="label">
                                             <table class='table table-condensed'>
                                               <tr>
                                                 <td>
                                                   ลำดับ
                                                 </td>
                                                 <td>
                                                   รหัสวิชา
                                                 </td>
                                                 <td>
                                                   เวลาที่ใช้
                                                 </td>
                                                 <td>
                                                   เวลที่เหลือ
                                                 </td>
                                               </tr>
                                               @foreach($sec as $key)
                                               <tr>
                                                 <td>
                                                   {{$count}}
                                                 </td>
                                                 <td>
                                                   {{$key->sub_id}}
                                                 </td>
                                                 <td>
                                                   {{$key->time_use}}
                                                 </td>
                                                 <td>
                                                   {{$key->time_left}}
                                                 </td>
                                                 <?php $count+=1; ?>
                                               </tr>
                                                 @endforeach
                                             </table>

                                           </div>

                                         </div>
                                       </main>
                                     </div>


                                </div> <!--/.tab-content-->
                            </div> <!--/.media-body-->
                        </div> <!--/.media-->
                    </div><!--/.tab-wrap-->
                </div><!--/.col-sm-6-->


            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->

 @endsection
<style type="text/css">
#label{
  color: white;
  font-size: 50px;
}

  #label{
  color: white;
  font-size: 25px;
}
#show{
  width:1200px;
  height: 800px;
  margin-left: 5px;

}
</style>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- create Button -->





</body>
</html>
