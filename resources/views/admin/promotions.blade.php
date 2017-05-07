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
                <li class="active">
                    <a href="{{ url('/admin/promotions') }}">
                        <i class="pe-7s-user"></i>
                        <p>Promotions</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/students') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Students</p>
                    </a>
                </li>
								<li>
										<a href="{{ url('/admin/courses') }}">
												<i class="pe-7s-news-paper"></i>
												<p>Courses</p>
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
                    <a class="navbar-brand" href="{{ url('/admin/promotions') }}">Promotions</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
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
					<div class="container-fluid">
							<div class="row">
									<div class="col-md-12">

										<div class="card">
													<div class="header">
															<h4 class="title">All Promotions</h4>
															<!-- <p class="category">Here is a subtitle for this table</p> -->
													</div>
													<div class="content table-responsive table-full-width" id="vue-app">



													<table class="table table-hover table-striped">
													<thead>
														<tr>
																<th>ID</th>
																<th>Name</th>
																<th>Image</th>
																<th>startdate</th>
																<th>expdate</th>
																<th>type</th>
																<th>total</th>
																<th>description</th>
														</tr>
													</thead>
													<tbody>
														<tr v-for="d in data">
																<td>@{{ d.id }}</td>
																<td>@{{ d.name }}</td>
																<td>@{{ d.img }}</td>
																<td>@{{ d.startdate }}</td>
																<td>@{{ d.expdate }}</td>
																<td>@{{ d.type }}</td>
																<td>@{{ d.total }}</td>
																<td>@{{ d.description }}</td>
														</tr>
													</tbody>
													</table>
													</div>


											</div>
										</div>
									</div>

 									<button type="button" class="btn btn-info btn-fill pull-right" data-toggle="modal" data-target="#addPromo">Add promotions</button>







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
		  <div class="modal fade" id="addPromo" role="dialog">
		    <div class="modal-dialog">
		      <!-- Modal content-->
		      <div class="modal-content">
						<div id="vue-add-promotion">

		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Add Promotion</h4>
		        </div>
		        <div class="modal-body">
							<!-- <div class="form-group">
							        <label for="name">Promotion Name</label>
							        <input type="text" class="form-control" v-model="name" id="name" placeholder="" required>
							</div>
							<div class="form-group">
							        <label for="img">Image</label>
							        <input type="file" class="form-control"  id="img" v-model="img" accept="image/*" required>
							</div>
							<div class="form-group">
							        <label for="startdate">Start Date</label>
							        <input type="date" class="form-control" v-model="startdate" id="startdate" placeholder="" required>
							</div>
							<div class="form-group">
							        <label for="expdate">Exp Date</label>
							        <input type="date" class="form-control" v-model="expdate" id="expdate" placeholder="" required>
							</div>
							<div class="form-group">
							        <label for="type">Discount Type</label>
											<select  class="form-control" v-model="type" required>
				                   <option value="" disabled selected>Please select type</option>
				                   <option value="percent" >Percent</option>
				                   <option value="baht" >Baht</option>
				                 </select>
							</div>

							<div class="form-group">
							        <label for="total">Discount Rate</label>
							        <input type="text" class="form-control" v-model="total" id="total" placeholder="" required>
							</div>
							<div class="form-group">
							        <label for="descript">Descript</label>
							       <textarea  class="form-control" rows="7" cols="60" name="des" placeholder="----description---" v-model="descript" > </textarea>
							</div>
							<button class="btn btn-success btn-fill" v-on:click="submit()">Submit</button> -->
<!--
							<form class="form-horizontal" id="data" role="form" method="POST" v-on:submit.prevent="submit" enctype="multipart/form-data">

									{{ csrf_field() }}

									<div class="form-group">
									        <label for="name">Promotion Name</label>
									        <input type="text" class="form-control" name="name" v-model="name" id="name" placeholder="" required>
									</div>
									<div class="form-group">
									        <label for="img">Image</label>
									        <input type="file" class="form-control"  id="img" name="img"  v-on:change="onFileChange" accept="image/*" required>
									</div>
									<div class="form-group">
									        <label for="startdate">Start Date</label>
									        <input type="date" class="form-control" name="startdate" id="startdate" v-model="startdate" placeholder="" required>
									</div>
									<div class="form-group">
									        <label for="expdate">Exp Date</label>
									        <input type="date" class="form-control" name="expdate" id="expdate" v-model="expdate" placeholder="" required>
									</div>
									<div class="form-group">
									        <label for="type">Discount Type</label>
													<select  class="form-control" name="type" v-model="type" id="type" required>
						                   <option value="" disabled selected>Please select type</option>
						                   <option value="percent" >Percent</option>
						                   <option value="baht" >Baht</option>
						                 </select>
									</div>

									<div class="form-group">
									        <label for="total">Discount Rate</label>
									        <input type="text" class="form-control" name="total" v-model="total" id="total" placeholder="" required>
									</div>
									<div class="form-group">
									        <label for="descript">Description</label>
									       <textarea  class="form-control" rows="7" cols="60" name="descript" id="descript" placeholder="----description---" v-model="descript" > </textarea>
									</div>
									<button class="btn btn-success btn-fill" type="submit">Submit</button>

							</form> -->

							<form @submit.prevent = "submitForm" method="post" id="addForm" enctype="multipart/form-data">
								<div class="form-group">
												<label for="name">Promotion Name</label>
												<input type="text" class="form-control" name="name"  id="name" placeholder="" required>
								</div>
								<!-- <div class="form-group">
												<label for="img">Image</label>
												<input type="file" class="form-control"  id="img" name="img"  v-on:change="onFileChange" accept="image/*" required>
								</div> -->
								<div class="form-group">
		                <div v-if="!image">
		                    <h2>Select an image</h2>
		                    </div>
		                <div v-else>
		                    <img :src="image" />
		                    <button @click="removeImage">Remove image</button>
		                </div>
		                <input name="image" id="image" type="file" class="form-control" @change="onFileChange">
		            </div>
								<div class="form-group">
												<label for="startdate">Start Date</label>
												<input type="date" class="form-control" name="startdate" id="startdate" placeholder="" required>
								</div>
								<div class="form-group">
												<label for="expdate">Exp Date</label>
												<input type="date" class="form-control" name="expdate" id="expdate"  placeholder="" required>
								</div>
								<div class="form-group">
												<label for="type">Discount Type</label>
												<select  class="form-control" name="type"  id="type" required>
														 <option value="" disabled selected>Please select type</option>
														 <option value="percent" >Percent</option>
														 <option value="baht" >Baht</option>
													 </select>
								</div>

								<div class="form-group">
												<label for="total">Discount Rate</label>
												<input type="text" class="form-control" name="total" id="total" placeholder="" required>
								</div>
								<div class="form-group">
												<label for="descript">Description</label>
											 <textarea  class="form-control" rows="7" cols="60" name="descript" id="descript" placeholder="----description---" > </textarea>
								</div>

            <button class="btn btn-success btn-fill" type="submit">Add Promotions</button>
        </form>

		        </div>


		        <div class="modal-footer">
		          <button type="button" class="btn btn-default btn-fill" data-dismiss="modal">Close</button>
		        </div>
					</div>

		      </div>

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

<script>



		var vm = new Vue({
        el: '#vue-app',
        data:{
					'data':[]
				},

				methods:{
					getPromotions: function(){
						axios.get('http://languagecenter.dev/api/promotions', {


            }).then(function (response) {
                console.log(response.data.data);
								if(response.data.success) vm.data = response.data.data;

            }).catch(function (error) {

                alert('Error (see console log)');
                console.log(error);

            });
					}

				}
    });

		var vm2 = new Vue({
    el: '#vue-add-promotion',
    data: {
        'image':''

    },
		  mounted: function(){
				vm.getPromotions();
			},
    methods: {
           onFileChange(e) {
             var files = e.target.files || e.dataTransfer.files;
             if (!files.length)
               return;
             this.createImage(files[0]);
           },
           createImage(file) {
             var image = new Image();
             var reader = new FileReader();
             var vm4 = this;
             reader.onload = (e) => {
               vm4.image = e.target.result;
             };
             reader.readAsDataURL(file);
           },
           removeImage: function (e) {
             this.image = '';
           },
           submitForm :function(){
               var form = document.querySelector('#addForm');
               var formdata = new FormData(form);
               console.log(formdata);
               jQuery.ajax({
              url: '/api/promotions',
              data: formdata,
              cache: false,
              contentType: false,
              processData: false,
              type: 'POST',
              success: function(data){
								vm.getPromotions();
                alert(data);
              }
            });
           }
    }
});

// new Vue({
//   el: '#app',
//   data: {
//     image: ''
//   },
//   methods: {
//     onFileChange(e) {
//       var files = e.target.files || e.dataTransfer.files;
//       if (!files.length)
//         return;
//       this.createImage(files[0]);
//     },
//     createImage(file) {
//       var image = new Image();
//       var reader = new FileReader();
//       var vm = this;
//
//       reader.onload = (e) => {
//         vm.image = e.target.result;
//       };
//       reader.readAsDataURL(file);
//     },
//     removeImage: function (e) {
//       this.image = '';
//     }
//   }
// })
</script>

</html>
