
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                      <!-- หน้าแรก -->
                        <li><a href="/"
                            onclick="event.preventDefault();
                                     document.getElementById('home').submit();">
                          หน้าแรก
                        </a>
                        <form id="home" action="/" method="get" style="display: none;">
                            <input type='hidden' name='username' value="{{$username}}">
                            {{ csrf_field() }}
                        </form></li>

                        <!-- คอร์ส -->
                        <li><a href="/course"
                            onclick="event.preventDefault();
                                     document.getElementById('download').submit();">
                          คอร์สเรียน
                        </a>
                        <form id="download" action="/course" method="get" style="display: none;">
                          <input type='hidden' name='username' value="{{$username}}">
                            {{ csrf_field() }}
                        </form></li>

                        <!-- ดาวน์โหลด -->
                        <li><a href="/getPDF"
                            onclick="event.preventDefault();
                                     document.getElementById('download').submit();">
                          ดาวน์โหลดฟอร์ม
                        </a>
                        <form id="download" action="/getPDF" method="get" style="display: none;">

                            {{ csrf_field() }}
                        </form></li>

                        <!-- ติดต่อ -->
                        <li><a href="/about-us"
                            onclick="event.preventDefault();
                                     document.getElementById('about').submit();">
                          ติดต่อเรา
                        </a>
                        <form id="about" action="/about-us" method="get" style="display: none;">
                            <input type='hidden' name='username' value="{{$username}}">
                            {{ csrf_field() }}
                        </form></li>

                       <!-- login -->
                        @if ($username=='')
                            <li><a href="/login">เข้าสู่ระบบ</a></li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ $username }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                  <!-- จอง -->
                                  <li>
                                      <a href="/profile"
                                          onclick="event.preventDefault();
                                                   document.getElementById('profile').submit();">
                                        โปรไฟล์
                                      </a>

                                      <form id="profile" action="/profile" method="get" style="display: none;">
                                          <input type='hidden' name='username' value="{{$username}}">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                                  <li>
                                      <a href="/reserveindex"
                                          onclick="event.preventDefault();
                                                   document.getElementById('reserve').submit();">
                                        จองเวลาเรียน
                                      </a>

                                      <form id="reserve" action="/reserveindex" method="get" style="display: none;">
                                          <input type='hidden' name='username' value="{{$username}}">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                                  <!-- logout -->
                                    <li>
                                        <a href="/"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            ออกจากระบบ
                                        </a>

                                        <form id="logout-form" action="/" method="get" style="display: none;">

                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->
     <main>
      @yield('content1')
    </main>
