<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

  </head>
  <body>
    <img id="pic" src="images/ezLogo.png">
    <div class=""><label>Voucher</label><br>
    </div>

    <div >
      {!! DNS1D::getBarcodeHTML($voucher,"c128") !!}<br>
    </div>

    <div class=""><label>Email : </label>
      {{$username}}<br>
    </div>

      <div class=""><label>Promotion id : </label>
        {{$pro_id}}<br>
      </div>

      <div class=""><label>Point : </label>
        {{$point}}<br>
      </div>




    <style media="screen">
      .code{
        height: 80px !important;
      }
    </style>
  </body>
</html>
