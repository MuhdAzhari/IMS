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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
	
	<!-- DataTables CSS -->
    <link href="assets/css/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="assets//css/datatables-responsive/dataTables.responsive.css" rel="stylesheet">


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
	
	<style>
	.error-template {padding: 40px 15px;text-align: center;}
	.error-actions {margin-top:15px;margin-bottom:15px;}
	.error-actions .btn { margin-right:10px; }
	</style>
	
	
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

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
	
	<!-- jQuery -->
    <script src="assets/js/jquery/jquery.min.js"></script>
	
	<!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
	
	
	<!-- DataTables JavaScript -->
    <script src="assets/js/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/datatables-responsive/dataTables.responsive.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();
        	
    	});
	</script>
	


		<!-- Map -->
	
	    <script>
        $().ready(function(){
            demo.initGoogleMaps();
        });
    </script>
	<script src="assets/js/demo.js"></script>

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


        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright pull-right">
                    &copy; 2018 made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>


</html>
