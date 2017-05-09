<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="/images/admin/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin Easy Language</title>

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
						<a href="{{ url('/admin') }}" class="simple-text">
								Admin
						</a>
				</div>

            <ul class="nav">
							<!-- <li >
									<a href="{{ url('/admin') }}">
											<i class="pe-7s-graph"></i>
											<p>Dashboard</p>
									</a>
							</li> -->
							<li >
									<a href="{{ url('/admin/users') }}">
											<!-- <i class="pe-7s-note2"></i> -->
											<i class="pe-7s-add-user"></i>
											<p>users</p>
									</a>
							</li>
							<li >
									<a href="{{ url('/admin/promotions') }}">
											<!-- <i class="pe-7s-user"></i> -->
											<i class="pe-7s-gift"></i>
											<p>Promotions</p>
									</a>
							</li>
							<li class="active">
									<a href="{{ url('/admin/subjects') }}">
											<i class="pe-7s-news-paper"></i>
											<p>subjects</p>
									</a>
							</li>
							<li>
									<a href="{{ url('/admin/vouchers') }}">
											<i class="pe-7s-ticket"></i>
											<p>voucher</p>
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
                    <a class="navbar-brand" href="{{ url('/admin/subjects') }}">Subjects</a>
                </div>
                <div class="collapse navbar-collapse">
                    <!-- <ul class="nav navbar-nav navbar-left">
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
                    </ul> -->

                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li>
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
                        </li> -->
												<li>
													<a href="">
															<p>{{ Auth::user()->email }}</p>
													 </a>

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

										<div class="card" id="vue-app">
													<div class="header">
															<h4 class="title">All Subjects

																<div class="input-group pull-right" style="width:250px">
																	<input type="text" class="form-control" placeholder="Search" name="q" v-model="search">
																		<div class="input-group-btn">
																	<button class="btn btn-default" type="submit" v-on:click="searchName()"><i class="glyphicon glyphicon-search"></i></button>
																	</div>
																</div>
															</h4>
															<!-- <p class="category">Here is a subtitle for this table</p> -->
													</div>
													<div class="content table-responsive table-full-width" >

													<table class="table table-hover table-striped">
													<thead>
														<tr>
																<th>Subject_ID</th>
																<th>Name</th>
																<th>type</th>
																<th>price</th>
																<th>hour</th>
																<th>point</th>
																<th>description</th>
																<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr v-for="d in data">
																<td>@{{ d.sub_id }}</td>
																<td>@{{ d.name }}</td>
																<td>@{{ d.type }}</td>
																<td>@{{ d.price }}</td>
																<td>@{{ d.hour }}</td>
																<td>@{{ d.point }}</td>
																<td>@{{ d.description }}</td>
																<!-- <td><button type="button" data-toggle="modal" :data-target="'#modal'+d.id"><img :src="'/images/promotions/' + d.img"  height="50" width="50"></button></td> -->
																<td>
																	<form @submit.prevent = "deletePromotion(d.sub_id)" method="post" :id="'del'+d.sub_id" >
																		<input type="hidden" name="id" :value="d.sub_id" required>
										            		<button class="btn btn-danger btn-fill" type="submit" >Delete</button>
										        		  </form>
																</td>
														</tr>
													</tbody>
													</table>
													</div>


											</div>
										</div>
									</div>
									<button type="button" class="btn btn-success btn-fill pull-right" data-toggle="modal" data-target="#addPromo">Add Subject</button>
									<!-- <button type="button" class="btn btn-success btn-fill pull-left" data-toggle="modal" data-target="#addImage">Add Image</button> -->








							</div>
					</div>
					<footer class="footer">
							<div class="container-fluid">
									<nav class="pull-left">
											<ul>

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
		    <div class="modal-dialog modal-lg">
		      <!-- Modal content-->
		      <div class="modal-content">
						<div id="vue-add-promotion">

		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Add Subject</h4>
		        </div>
		        <div class="modal-body">
							<form @submit.prevent = "submitForm" method="post" id="addForm" enctype="multipart/form-data">

								<div class="form-group">
												<label for="name">Subject ID</label>
												<input type="text" class="form-control" name="sub_id"  id="sub_id" placeholder="" required>
								</div>
								<div class="form-group">
												<label for="startdate">Name</label>
												<input type="text" class="form-control" name="name" id="name" placeholder="" required>
								</div>
								<div class="form-group">
												<label for="expdate">Type</label>
												<input type="text" class="form-control" name="type" id="type"  placeholder="" required>
								</div>
								<div class="form-group">
												<label for="total">Price</label>
												<input type="text" class="form-control" name="price" id="price" placeholder="" required>
								</div>
								<div class="form-group">
												<label for="total">Hour</label>
												<input type="text" class="form-control" name="hour" id="hour" placeholder="" required>
								</div>
								<div class="form-group">
												<label for="total">Point</label>
												<input type="text" class="form-control" name="point" id="point" placeholder="" required>
								</div>
								<div class="form-group">
												<label for="descript">Description</label>
											 <textarea  class="form-control" rows="7" cols="60" name="description" id="description" placeholder="----description---" > </textarea>
								</div>

            <button class="btn btn-success btn-fill" type="submit">Add Subject</button>
        </form>

		        </div>


		        <div class="modal-footer">
		          <button type="button" class="btn btn-default btn-fill" data-dismiss="modal">Close</button>
		        </div>
					</div>

		      </div>

		    </div>
		  </div>

			<div class="modal fade" id="addImage" role="dialog">
		    <div class="modal-dialog modal-lg">
		      <!-- Modal content-->
		      <div class="modal-content">
						<div id="vue-add-image">

		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Add Subject</h4>
		        </div>
		        <div class="modal-body">
							<form @submit.prevent = "submitImage" method="post" id="addImageForm" enctype="multipart/form-data">
								<div v-if="!image">
										<label for="image">Select an image</label>
										</div>
								<div v-else>
										<img :src="image" width="500" height="300"/>
										<!-- <button @click="removeImage">Remove image</button> -->
										<br>
										<br>
								</div>
								<input name="image2" id="image2" type="file" accept="image/*" class="form-control" @change="onFileChange">
								<br>
								<br>
            <button class="btn btn-success btn-fill" type="submit">Add Subject Image</button>
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
					'data':[],
					'search':''
				},
				watch: {
						search: function(){
							this.searchName()
						}
				},
				mounted: function(){
					this.getPromotions();
				},

				methods:{
					getPromotions: function(){
						axios.get('/api/subjects', {
            }).then(function (response) {
                // console.log(response.data.data);
								if(response.data.success) {
									vm.data = response.data.data;

								}

            }).catch(function (error) {

                alert('Error (see console log)');
                console.log(error);

            });
					},
					deletePromotion :function(id){
							// console.log(id);
							jQuery.ajax({
						 		url: '/api/subjects/'+id,
						 		cache: false,
						 		contentType: false,
						 		processData: false,
						 		type: 'DELETE',
						 		success: function(data){
							 		vm.getPromotions();
									alert(data.data);
						 }
					 });
					},
 				 searchName: function(){
 						 // console.log(id);
 						 jQuery.ajax({
 							 url: '/api/subjects/'+this.search,
 							 cache: false,
 							 contentType: false,
 							 processData: false,
 							 type: 'GET',
 							 success: function(response){
 								 vm.data = response.data;
 								 vmmodal.data = response.data;
 						}
 					});
 				}

				}
    });

		var vm8 = new Vue({
    el: '#vue-add-image',
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
             var vm6 = this;
             reader.onload = (e) => {
               vm6.image = e.target.result;
             };
             reader.readAsDataURL(file);
           },
           removeImage: function (e) {
             this.image = '';
           },
           submitImage :function(){
               var form = document.querySelector('#addImageForm');
               var formdata = new FormData(form);
               jQuery.ajax({
              url: '/api/subjects/50',
              data: formdata,
              contentType: false,
              processData: false,
              type: 'PUT',
              success: function(data){
								console.log(data.success);
              }
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
              //  console.log(formdata);
               jQuery.ajax({
              url: '/api/subjects',
              data: formdata,
              cache: false,
              contentType: false,
              processData: false,
              type: 'POST',
              success: function(data){
								vm.getPromotions();
                alert(data.data);
								document.getElementById("addForm").reset();
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
