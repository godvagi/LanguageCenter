@extends('layouts.master')

@section('content')
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




<section id="services" class="service-item">
 <div class="container">
        <div class="center wow fadeInDown">
            <h2>ทำไมต้อง Easy Language</h2>
        </div>

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services1.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">ช่วยวางแผนการเรียน</h3>
                        <p>เรามีเจ้าหน้าที่ควยช่วยให้คำแนะนำ และวางแผนการเรียนเสริม เพื่อให้การเรียนเกิดประสิทธิภาพสูงสุด</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services2.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">มีอิสระในการเรียน</h3>
                        <p>นักเรียนสามารถเลือกเวลาเรียนเองได้ และสามารถเลือกว่าจะเรียนบทไหนก่อนก็ได้</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services3.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">ช่วยให้คำปรึกษา</h3>
                        <p>เรามีบุคลากรที่มีความรู้ นักเรียนสามารถนำการบ้านหรือบทเรียนที่ไม่เข้าใจมาขอคำปรึกษาเพิ่มได้</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services4.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">เทคนิคการสอนเฉพาะตัว</h3>
                        <p>เรามีบุคลากรที่มีความสามารถ ทำให้นักเรียนสนุกไปกับบทเรียน และเข้าใจเนื้อหาได้ง่าย</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services5.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">ระบบจองออนไลน์</h3>
                        <p>นักเรียนสามารถจองที่นั่งเองได้จากที่ไหนก็ได้ ทำให้มั่นใจได้ว่าจะไม่มีปัญหาที่นั่งเต็ม</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services6.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">ทันสมัย</h3>
                        <p>เรามีห้องเรียนที่สะดวกสบายและทันสมัย ทำให้ผู้เรียนสามารถเรียนได้อย่างมีประสิทธิภาพ</p>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->


<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>บรรยากาศภายในสถาบัน</h2>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/portfolio/recent/item14.jpg" alt="">
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/portfolio/recent/item13.jpg" alt="">
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/portfolio/recent/item12.jpg" alt="">
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/portfolio/recent/item11.jpg" alt="">
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/portfolio/recent/item10.jpg" alt="">
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/portfolio/recent/item9.jpg" alt="">
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/portfolio/recent/item5.png" alt="">
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/portfolio/recent/item7.png" alt="">
                </div>
            </div>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#recent-works-->



<section id="middle">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow fadeInDown">
                <div class="skill">
                    <h2>คอร์สเรียนยอดนิยม</h2>
                    <p>เราเก็บสถิติการสมัครเรียนของเรามาเพื่อช่วยคุณตัดสินใจ</p>

                    <div class="progress-wrap">
                        <h3>เตรียมสอบเข้ามัธยมปลาย</h3>
                        <div class="progress">
                          <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                           <span class="bar-width">95%</span>
                          </div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>เตรียมสอบภาษาอังกฤษ I</h3>
                        <div class="progress">
                          <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                            <span class="bar-width">90%</span>
                          </div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>GRAMMAR II</h3>
                        <div class="progress">
                          <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 81%">
                            <span class="bar-width">81%</span>
                          </div>

                        </div>
                    </div>


                    <div class="progress-wrap">
                        <h3>VOCAB II</h3>
                        <div class="progress">
                          <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="bar-width">80%</span>
                          </div>
                        </div>
                    </div>

                </div>

            </div><!--/.col-sm-6-->

        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#middle-->


@endsection

@section('script')

@endsection
