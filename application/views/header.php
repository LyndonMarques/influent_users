<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Dynamic Tables (DataTables) | Melon - Flat &amp; Responsive Admin Template</title>
	
	<!--=== CSS ===-->
	
	<!-- Bootstrap -->
	<link href="<?= base_url(); ?>/statics/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	
	<!-- jQuery UI -->
	<!--<link href="plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/statics/plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
	<![endif]-->
	
	<!-- Theme -->
	<link href="<?= base_url(); ?>/statics/assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>/statics/assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>/statics/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>/statics/assets/css/icons.css" rel="stylesheet" type="text/css" />
	
	<link rel="stylesheet" href="<?= base_url(); ?>/statics/assets/css/fontawesome/font-awesome.min.css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="<?= base_url(); ?>/statics/assets/css/fontawesome/font-awesome-ie7.min.css">
	<![endif]-->
	
	<!--[if IE 8]>
	<link href="<?= base_url(); ?>/statics/assets/css/ie8.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	
	<!--=== JavaScript ===-->
	
	<script type="text/javascript" src="<?= base_url(); ?>/statics/assets/js/libs/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
	
	<script type="text/javascript" src="<?= base_url(); ?>/statics/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/statics/assets/js/libs/lodash.compat.min.js"></script>
	
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="<?= base_url(); ?>/statics/assets/js/libs/html5shiv.js"></script>
	<![endif]-->
	
	<!-- Smartphone Touch Events -->
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/event.swipe/jquery.event.move.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/event.swipe/jquery.event.swipe.js"></script>
	
	<!-- General -->
	<script type="text/javascript" src="<?= base_url(); ?>/statics/assets/js/libs/breakpoints.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/respond/respond.min.js"></script> <!-- Polyfill for min/max-width CSS3 Media Queries (only for IE8) -->
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/cookie/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script>
	
	<!-- Page specific plugins -->
	<!-- Charts -->
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/sparkline/jquery.sparkline.min.js"></script>
	
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/blockui/jquery.blockUI.min.js"></script>
	
	<!-- Forms -->
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/uniform/jquery.uniform.min.js"></script> <!-- Styled radio and checkboxes -->
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/select2/select2.min.js"></script> <!-- Styled select boxes -->
	
	<!-- DataTables -->
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/datatables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/datatables/tabletools/TableTools.min.js"></script> <!-- optional -->
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/datatables/colvis/ColVis.min.js"></script> <!-- optional -->
	<script type="text/javascript" src="<?= base_url(); ?>/statics/plugins/datatables/DT_bootstrap.js"></script>
	
	<!-- App -->
	<script type="text/javascript" src="<?= base_url(); ?>/statics/assets/js/app.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/statics/assets/js/plugins.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/statics/assets/js/plugins.form-components.js"></script>
	
	<script>
        $(document).ready(function(){
            "use strict";

            Plugins.init(); // Init all plugins

        });
	</script>
	
	<!-- Demo JS -->
	<script type="text/javascript" src="<?= base_url(); ?>/statics/assets/js/custom.js"></script>

</head>
<body>

<!-- Header -->
<header class="header navbar navbar-fixed-top" role="banner">
	<!-- Top Navigation Bar -->
	<div class="container">
		
		<!-- Only visible on smartphones, menu toggle -->
		<ul class="nav navbar-nav">
			<li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
		</ul>
		
		<!-- Logo -->
		<a class="navbar-brand" href="index.html">
			<img src="<?= base_url(); ?>statics/assets/img/logo.png" alt="logo" />
		</a>
		<!-- /logo -->
		
		<!-- Sidebar Toggler -->
		<a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
			<i class="icon-reorder"></i>
		</a>
		<!-- /Sidebar Toggler -->
		
		<!-- Top Right Menu -->
		<ul class="nav navbar-nav navbar-right">
			
			<!-- User Login Dropdown -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
					<i class="icon-male"></i>
					<span class="username">John Doe</span>
					<i class="icon-caret-down small"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?= base_url("index.php/login/logout");?>"><i class="icon-key"></i> Log Out</a></li>
				</ul>
			</li>
			<!-- /user login dropdown -->
		</ul>
		<!-- /Top Right Menu -->
	</div>
	<!-- /top navigation bar -->
	
	<!--=== Project Switcher ===-->
	<div id="project-switcher" class="container project-switcher">
		<div id="scrollbar">
			<div class="handle"></div>
		</div>
		
		<div id="frame">
			<ul class="project-list">
				<li>
					<a href="javascript:void(0);">
						<span class="image"><i class="icon-desktop"></i></span>
						<span class="title">Lorem ipsum dolor</span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="image"><i class="icon-compass"></i></span>
						<span class="title">Dolor sit invidunt</span>
					</a>
				</li>
				<li class="current">
					<a href="javascript:void(0);">
						<span class="image"><i class="icon-male"></i></span>
						<span class="title">Consetetur sadipscing elitr</span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="image"><i class="icon-thumbs-up"></i></span>
						<span class="title">Sed diam nonumy</span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="image"><i class="icon-female"></i></span>
						<span class="title">At vero eos et</span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="image"><i class="icon-beaker"></i></span>
						<span class="title">Sed diam voluptua</span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="image"><i class="icon-desktop"></i></span>
						<span class="title">Lorem ipsum dolor</span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="image"><i class="icon-compass"></i></span>
						<span class="title">Dolor sit invidunt</span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="image"><i class="icon-male"></i></span>
						<span class="title">Consetetur sadipscing elitr</span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="image"><i class="icon-thumbs-up"></i></span>
						<span class="title">Sed diam nonumy</span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="image"><i class="icon-female"></i></span>
						<span class="title">At vero eos et</span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<span class="image"><i class="icon-beaker"></i></span>
						<span class="title">Sed diam voluptua</span>
					</a>
				</li>
			</ul>
		</div> <!-- /#frame -->
	</div> <!-- /#project-switcher -->
</header> <!-- /.header -->
