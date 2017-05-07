<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <link href="css/form-reserve.css" rel="stylesheet">
  </head>
  <body>

    <form action="/reserveme" method="post">
      <input type='hidden' name='_token' value="{{ csrf_token() }}">
      <label class="mr-sm-2" for="inlineFormCustomSelect">วันที่</label>
  <input class="btn btn-default dropdown-toggle" type="date" name="date">
  <label class="mr-sm-2" for="inlineFormCustomSelect">เวลา</label>
  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="time" name='time'>
    <option selected>Choose...</option>
    <option value="08.00-09.00">08.00-09.00</option>
    <option value="09.00-10.00">09.00-10.00</option>
    <option value="10.00-11.00">10.00-11.00</option>
  </select>
  <?php
  $num=[1,2,3,4,5,6,7,8,9,10,
        11,12,13,14,15,16,17,18,19,20,
      21,22,23,24,25,26,27,28,29,30];
  $date=['1/1/2559','2/1/2559','3/1/2559'];
  $time=['08.00-09.00','09.00-10.00','10.00-11.00'];
  $i =0 ;
  ?>
  <input type='hidden' name='username' value="{{$username}}">
  <button type="submit"  class="btn btn-primary" onclick="<script>
    toggle() {
      var div = document.getElementById('contains');
        if (div.style.display !== 'none') {
          div.style.display = 'none';
        }
        else {
          div.style.display = 'block';
        }
      };
   </script>">Submit</button><br>

<div class="contains" style="display: yes;">
    @foreach($num as $k)
      @if(count($data)>($i))
      @if( $data[$i]->status != '' && $data[$i]->id == $k )

    <?php $i+=1; ?>
    <button class="form-check-input" type="submit"  name='id' id="id" value="{{$k}}" disabled> {{$k}}
      @else
      <button class="form-check-input" type="submit"  name='id' id="id" value="{{$k}}" > {{$k}}
        @endif
        @else
        <button class="form-check-input" type="submit"  name='id' id="id" value="{{$k}}" > {{$k}}
          @endif
          @if($k%10==0)
           </button><br><br><br>
           @endif
          @endforeach
        </div>

  <!-- <label class="mr-sm-2" for="inlineFormCustomSelect">ที่นั่ง</label>
  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="id" name='id'>
    <option selected>Choose...</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select> -->


</form>


  </body>
</html>
