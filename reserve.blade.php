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
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">



</head><!--/head-->

<body class="homepage" onload="createButton()">

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
                        <li class="active"><a href="{{url('/')}}">หน้าแรก</a></li>
                        <li><a href="{{url('/about-us')}}">เกี่ยวกับเรา</a></li>
                        <li><a href="services.html">คอร์ส</a></li>
                        <li><a href="contact-us.html">ติดต่อเรา</a></li>
                        <li><a href="{{url('/login')}}">login</a></li>

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->

    <section>
       <center>
      <label>Date : </label>
      <input class="btn btn-default dropdown-toggle" type="date" name="date">
      <label>Time : </label>
       <span class="dropdown">
        <select class="btn btn-default dropdown-toggle"  id="menu1" data-toggle="dropdown">Select Time
        <span class="caret"></span>
          <option>09.00-10.00</option>
          <option>10.00-11.00</option>
          <option>11.00-12.00</option>
          <option>12.00-13.00</option>
          <option>13.00-14.00</option>
          <option>14.00-15.00</option>
          <option>15.00-16.00</option>
          <option>16.00-17.00</option>
        </select>
      
     
       <button type="button" class="btn btn-success" onclick="reserve()">Success</button><br><br>
    </span>
                <span id = "A1"  ></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <span id = "B1"  >      </span><br><br><br>
                    <span id = "A2"  ></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <span id = "B2"  ></span><br><br><br> 
                    <span id = "A3"  ></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <span id = "B3"  ></span>
                   <br><br><br>
                    </center>
  </section>

    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need a custom quote?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#conatcat-info-->

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- create Button -->
    <script>
    var seat = "";
    function createButton() {
        var i = 10;
        for (i=10;i<19;i++) {  

             var v = document.createElement('input');
             v.id = "A"+i;
            
             v.type="button";
             v.value="A" +i;
            
            document.getElementById('A1').appendChild(v);
      
        }

        for (i= i;i<28;i++) {  
             var v = document.createElement('input');
             v.id = "A"+i;
             // document.getElementById("bt").className = "button is-info is-outlined";
             v.type="button";
             v.value="A" +i;
            document.getElementById('A2').appendChild(v);
     
        }
        for (j= 10;j<19;j++) {  
             var v = document.createElement('input');
             v.id = "B"+j;
             // document.getElementById("bt").className = "button is-info is-outlined";
             v.type="button";
             v.value="B" +j;
            document.getElementById('B1').appendChild(v);v.onclick = function() { alert('Select this'); };
            
        }
        for (j= j;j<28;j++) {  
             var v = document.createElement('input');
             v.id = "B"+j;
             // document.getElementById("bt").className = "button is-info is-outlined";
             v.type="button";
             v.value="B" +j;
            document.getElementById('B2').appendChild(v);
            
        }
        for (j= j;j<37;j++) {  
             var v = document.createElement('input');
             v.id = "B"+j;
             // document.getElementById("bt").className = "button is-info is-outlined";
             v.type="button";
             v.value="B" +j;
            document.getElementById('B3').appendChild(v);
            
        }
        for (i= i;i<37;i++) {  
             var v = document.createElement('input');
             v.id = "A"+i;
             // document.getElementById("bt").className = "button is-info is-outlined";
             v.type="button";
             v.value="A" +i;
            document.getElementById('A3').appendChild(v);
            
        }
        for (var i = 10; i<37; i++) {
            $("#A"+i).addClass("btn btn-default");
            $("#B"+i).addClass("btn btn-default");
            var btA =document.getElementById("A"+i);
            btA.onclick = function() { showSeat(this);}            
            var btB =document.getElementById("B"+i);
            btB.onclick = function() { showSeat(this);}
        }
    
    }
    function showSeat(v){
        alert(v.value);

    }
    function reserve(){
        if (seat===""){
            alert("Please select seat.");
        }

    }
    </script>
   


</body>
</html>
