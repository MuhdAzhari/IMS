<!--Template Design By CreativeTim-->
<!--   Custom Design By TSSC	  -->	



<?php

include_once("init.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>IMS</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
	
	<!-- Data table css-->
	<!--<link href="DataTables/css/jquery.dataTables.min.css" rel="stylesheet" />
	<link href="DataTables/css/buttons.dataTables.min.css" rel="stylesheet" />-->
	<link rel="stylesheet" type="text/css" href="DataTables/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="DataTables/css/buttons.dataTables.min.css">

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
	<link href="font-awesome/css/fontawesome-all.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
	
	<style>
	.error-template {padding: 40px 15px;text-align: center;}
	.error-actions {margin-top:15px;margin-bottom:15px;}
	.error-actions .btn { margin-right:10px; }
	
	


	
	</style>
	
	<!--  Fonts and icons     -->
	<link href="font-awesome/js/fontawesome-all.js" rel="stylesheet">
	
	
	<!-- Metis Menu Plugin JavaScript -->
    <script src="assets/js/metisMenu/metisMenu.min.js"></script>
	
    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
	
	<!-- jQuery -->
    <script src="assets/js/jquery/jquery.min.js"></script>
	
	<!--  Google Maps Plugin    -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-lfvqULhEiCikZ8lZNK9KbM7ZzEAtsAA&callback=initMap"
	type="text/javascript"></script>
	
	
	
	
	<!--  Datatable    -->
		
	<script type="text/javascript" language="javascript" src="DataTables/js/jquery-1.12.4.js">
	</script>
	<script type="text/javascript" language="javascript" src="DataTables/dataTables.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="DataTables/js/dataTables.buttons.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="DataTables/js/buttons.flash.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="DataTables/js/jszip.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="DataTables/js/pdfmake.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="DataTables/js/vfs_fonts.js">
	</script>
	<script type="text/javascript" language="javascript" src="DataTables/js/buttons.html5.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="DataTables/js/buttons.print.min.js">
	</script>

	<script type="text/javascript" class="init">
	


	$(document).ready(function() {
		$('#example').DataTable( {
			dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			]
		} );
	} );



	</script>
	
	
	<!--Chart demo--->
	
	<script src="assets/js/demo.js"></script>
	
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();
        	
    	});
	</script>
	

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="warning">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                 <img style="width:50%; heigh:auto;" src="image/logo/ims_perak.png">
                </a>
            </div>

            <ul class="nav">
			
			
			
			<?php

              ?>
			
			
                <li class="active">
                    <a href="?page=dashboard">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="?page=company">
                        <i class="ti-user"></i>
                        <p>Company</p>
                    </a>
                </li>
                <li>
                    <a href="?page=mine">
                        <i class="ti-view-list-alt"></i>
                        <p>Mine</p>
                    </a>
                </li>
                <li>
                    <a href="?page=product">
                        <i class="ti-view-list-alt"></i>
                        <p>Product</p>
                    </a>
                </li>
                <li>
                    <a href="?page=truck">
                        <i class="ti-truck"></i>
                        <p>Truck</p>
                    </a>

                </li>
                <li>
                    <a href="?page=map">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" style="text-transform: capitalize;" href="
					<?php
		
						$page = (isset($_GET['page']))?$_GET['page']:"";
						if(!empty($page)){
							echo "main.php?page=".$page;
						}else{
							echo "dashboard.php";
						}
					?>
					
					">
					 <?php
		
						$page = (isset($_GET['page']))?$_GET['page']:"";
						if(!empty($page)){
							echo $page;
						}else{
							echo "dashboard";
						}
					  ?>
					
					
					
					
					
					</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-user"></i>
									<p>Login as <?php echo $_SESSION['username']?> </p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#"><i class="ti-user"></i> View Profile</a></li>
                                <li><a href="#"><i class="ti-settings"></i>  Edit Profile</a></li>
								<li><a href="#"><i class="ti-help-alt"></i> Help </a></li>
                                <li><a href="logout.php"><i class="ti-power-off"></i> Log Out</a></li>
                              </ul>
                        </li>
						<li>
						<a href="javascript:void(0);" onclick="javascript:window.open('shortcuts.html','myNewWinsr','width=600,height=110,toolbar=0,menubar=no,status=no,resizable=yes,location=no,directories=no,scrollbars=yes');">
						<i class="ti-info-alt"></i>
						Shortcut
						</a>
						</li>
						


                </div>
            </div>
        </nav>


        <div class="content">
        <?php
		
			$page = (isset($_GET['page']))?$_GET['page']:"";
			if(!empty($page)){
			   $page = $page.".php";
	
			  if(file_exists($page)){
				require($page);
			  }else{
				echo "content not found";
			  }
			}else{
				if($_SESSION['usertype'] == 'admin')
				{
					require("dashboard.php");
				}
				else
				{
					require("404.php");					
				}
			}
		  ?>
		  		 		 
		  
        </div>
		

		  <!--end-->
		


        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright pull-right">
                    &copy; 2018 made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">TSSC</a>
                </div>
            </div>
        </footer>

    </div>
</div>


<!-- Mine Modal Form-->
			<div class="modal fade" id="mineform" role="dialog" >
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title" id="myModalLabel">Mine Form</h4>
						</div>
						
						<!-- Modal Body -->
						<div class="modal-body">
							<p class="statusMsg"></p>
							<form role="form">
								<div class="form-group">
									<label for="inputName">Name</label>
									<input type="text" style="border: 1px solid black; border-radius: 5px;" class="form-control" id="inputName" placeholder="Enter your name"/>
								</div>
								<div class="form-group">
									<label for="inputEmail">Email</label>
									<input type="email"  style="border: 1px solid black; border-radius: 5px;" class="form-control" id="inputEmail" placeholder="Enter your email"/>
								</div>
								<div class="form-group">
									<label for="inputNote">Note</label>
									<textarea class="form-control"  style="border: 1px solid black; border-radius: 5px;" id="inputMessage" placeholder="Enter your message"></textarea>
								</div>
							</form>
						</div>
						
						<!-- Modal Footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
						</div>
					</div>
				</div>
			</div>
<!--end-->



<!-- Company Modal Form-->
			<div class="modal fade" id="companyform" role="dialog" >
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title" id="myModalLabel">Company Form</h4>
						</div>
						
						<!-- Modal Body -->
						<div class="modal-body">
							<p class="statusMsg"></p>
							<form role="form">
								<div class="form-group">
									<label for="inputName">Name</label>
									<input type="text" style="border: 1px solid black; border-radius: 5px;" class="form-control" id="inputName" placeholder="Enter your name"/>
								</div>
								<div class="form-group">
									<label for="inputEmail">Email</label>
									<input type="email"  style="border: 1px solid black; border-radius: 5px;" class="form-control" id="inputEmail" placeholder="Enter your email"/>
								</div>
								<div class="form-group">
									<label for="inputNote">Note</label>
									<textarea class="form-control"  style="border: 1px solid black; border-radius: 5px;" id="inputMessage" placeholder="Enter your message"></textarea>
								</div>
							</form>
						</div>
						
						<!-- Modal Footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
						</div>
					</div>
				</div>
			</div>
<!--end-->

<!-- Product Modal Form-->
			<div class="modal fade" id="productform" role="dialog" >
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title" id="myModalLabel">Product Form</h4>
						</div>
						
						<!-- Modal Body -->
						<div class="modal-body">
							<p class="statusMsg"></p>
							<form role="form">
								<div class="form-group">
									<label for="inputName">Name</label>
									<input type="text" style="border: 1px solid black; border-radius: 5px;" class="form-control" id="inputName" placeholder="Enter your name"/>
								</div>
								<div class="form-group">
									<label for="inputNote">Note</label>
									<textarea class="form-control"  style="border: 1px solid black; border-radius: 5px;" id="inputMessage" placeholder="Enter your message"></textarea>
								</div>
							</form>
						</div>
						
						<!-- Modal Footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
						</div>
					</div>
				</div>
			</div>
<!--end-->


<!-- Truck Modal Form-->
			<div class="modal fade" id="truckform" role="dialog" >
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title" id="myModalLabel">Truck Form</h4>
						</div>
						
						<!-- Modal Body -->
						<div class="modal-body">
							<p class="statusMsg"></p>
							<form role="form">
								<div class="form-group">
									<label for="inputName">Name</label>
									<input type="text" style="border: 1px solid black; border-radius: 5px;" class="form-control" id="inputName" placeholder="Enter your name"/>
								</div>
								<div class="form-group">
									<label for="inputNote">Note</label>
									<textarea class="form-control"  style="border: 1px solid black; border-radius: 5px;" id="inputMessage" placeholder="Enter your message"></textarea>
								</div>
							</form>
						</div>
						
						<!-- Modal Footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
						</div>
					</div>
				</div>
			</div>
<!--end-->


</body>


</html>
