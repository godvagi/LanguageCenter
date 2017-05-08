<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="/images/admin/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="/images/admin/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li >
                    <a href="{{ url('/admin') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/promotions') }}">
                        <i class="pe-7s-user"></i>
                        <p>Promotions</p>
                    </a>
                </li>
								<li class="active">
										<a href="{{ url('/admin/users') }}">
												<i class="pe-7s-note2"></i>
												<p>users</p>
										</a>
								</li>
								<li >
										<a href="{{ url('/admin/subjects') }}">
												<i class="pe-7s-news-paper"></i>
												<p>subjects</p>
										</a>
								</li>
                <!-- <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li> -->
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Users</a>
                </div>
                <div class="collapse navbar-collapse">


                    <ul class="nav navbar-nav navbar-right">


                        <li>
													<a href="{{ route('logout') }}"
															onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">
															Logout
													</a>

													<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
															{{ csrf_field() }}
													</form>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
						<div id='vue-add-course'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
													<div class="header">
															<h4 class="title">Create Students</h4>
															<p class="category"></p>
													</div>
													<div class="content">
														<form @submit.prevent = "submitAddUser" method="post" id="addUser" enctype="multipart/form-data">
															<!-- <div class="row">
																	<div class="col-md-12">
																			<div class="form-group">
																					<label>Name</label>
																					<input type="text" class="form-control" name="name" id="name" placeholder="name" required>
																			</div>
																	</div>
															</div>
															<div class="row">
																	<div class="col-md-12">
																			<div class="form-group">
																					<label>E-mail Address</label>
																					<input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
																			</div>
																	</div>
															</div>
															<div class="row">
																	<div class="col-md-12">
																			<div class="form-group">
																					<label>Password</label>
																					<input id="password" type="password" name="email" id="email" class="form-control" name="password" required>
																			</div>
																	</div>
															</div>
															<div class="row">
																	<div class="col-md-12">
																			<div class="form-group">
																					<label>Confirm Password</label>
																					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
																			</div>
																	</div>
															</div>

															<button type="submit" class="btn btn-info btn-fill pull-right">Create User</button>
															<div class="clearfix"></div>
 -->
 {{ csrf_field() }}

 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
 		<label for="name" class="col-md-4 control-label">Name</label>

 		<div class="col-md-6">
 				<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

 				@if ($errors->has('name'))
 						<span class="help-block">
 								<strong>{{ $errors->first('name') }}</strong>
 						</span>
 				@endif
 		</div>
 </div>

 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
 		<label for="email" class="col-md-4 control-label">E-Mail Address</label>

 		<div class="col-md-6">
 				<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

 				@if ($errors->has('email'))
 						<span class="help-block">
 								<strong>{{ $errors->first('email') }}</strong>
 						</span>
 				@endif
 		</div>
 </div>

 		<label for="password" class="col-md-4 control-label">Role</label>
 		<div class="col-md-6">
			<select  class="form-control" name="role"  id="role" required>
					 <option value='user' >User</option>
					 <option value='admin' >Admin</option>
				 </select>
 		</div>


 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
 		<label for="password" class="col-md-4 control-label">Password</label>

 		<div class="col-md-6">
 				<input id="password" type="password" class="form-control" name="password" required>

 				@if ($errors->has('password'))
 						<span class="help-block">
 								<strong>{{ $errors->first('password') }}</strong>
 						</span>
 				@endif
 		</div>
 </div>

 <div class="form-group">
 		<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

 		<div class="col-md-6">
 				<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
 		</div>
 </div>

 <div class="form-group">
 		<div class="col-md-6 col-md-offset-4">
 				<button type="submit" class="btn btn-primary">
 						Register
 				</button>
 		</div>
 </div>


												</form>
													</div>
                        </div>
                    </div>

										<div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Subject For Students</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content">

																<form @submit.prevent = "submitAddCourse" method="post" id="addCourse" enctype="multipart/form-data">
																<div class="row">
																	<div class="col-md-12">
																			<div class="form-group">
																					<label>E-mail Address</label>
																					<input type="email" class="form-control" name="cEmail" id="cEmail" placeholder="E-mail" required>
																			</div>
																	</div>
																	</div>
																	<div class="row">
																			<div class="col-md-12">
																					<div class="form-group">
																							<label>Subject ID</label>
																							<input type="text" class="form-control" name="cSubId" id="cSubId"  placeholder="Subject ID" required>
																					</div>
																			</div>
																	</div>



										            <button class="btn btn-info btn-fill pull-right" type="submit">Add Course For Students</button>

										        </form>
																	<!-- <button v-on:click='submitAddCourse' class="btn btn-info btn-fill pull-right">Add Course For Students</button> -->
																	<div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
						</div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="/js/admin/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="/js/admin/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="/js/admin/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="/js/admin/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/js/admin/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> -->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="/js/admin/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="/js/admin/demo.js"></script>
	<script src="/js/app.js" charset="utf-8"></script>


<script >


		var vm = new Vue({
    el: '#vue-add-course',
    data: {
        'cEmail': '',
        'cCourseID': ''
    },
    methods: {

        submitAddCourse: function () {
						// alert('halo');
					var form = document.querySelector('#addCourse');
 					 var formdata = new FormData(form);
 					//  console.log(formdata);
 					 jQuery.ajax({
 							url: '/api/sections',
 							data: formdata,
 							cache: false,
 							contentType: false,
 							processData: false,
 							type: 'POST',
 							success: function(data){
 								alert(data.data);
 							}
 						});

        },
				submitAddUser: function () {
						// alert('halo');
					var form = document.querySelector('#addUser');
 					 var formdata = new FormData(form);
 					//  console.log(formdata);
 					 jQuery.ajax({
 							url: '/register',
 							data: formdata,
 							cache: false,
 							contentType: false,
 							processData: false,
 							type: 'POST',
 							success: function(data){
 								alert(data.data);
 							}
 						});

        }

    }
});
</script>

</html>
