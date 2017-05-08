<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

  </head>
  <body>
    <!-- <center><img id="pic" src="images/ezLogo.png"></center> -->
    <!-- <img  id="pic" src="images/voucher.jpg"> -->
    <img   src="images/voucher2.jpg">
<div id="all">
    <div id="lable">

      {!! DNS1D::getBarcodeHTML($voucher,"c128") !!}<br><br><br>
    </div>


<div id="lable2">
      <label >Email : </label>
      {{$username}}<br>


      <label>Promotion id : </label>
        {{$pro_id}}<br>


      <label >Point : </label>
        {{$point}}<br>

      <label >Startdate : </label>
        {{$startdate}}<br>

      <label >expdate : </label>
        {{$expdate}}<br>
      </div>
    </div><br><br><br><br><br>

      <style>
      #pic{
        height: 150px;
        width: 150px;
      }
      #lable{
        font-size: 30px;

          margin-left: 300px;
      }
      #lable2{
        font-size: 30px;

          margin-left: 250px;
      }

      /*#all{
        margin-top: -100px;
        margin-right: 60px;
      }*/
      </style>




    <style media="screen">
      .code{
        height: 80px !important;
      }
    </style>
  </body>
</html>
