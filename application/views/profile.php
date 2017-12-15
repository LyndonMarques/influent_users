
<?= include "header.php"?>

<div id="container">
	<div id="sidebar" class="sidebar-fixed">
		<div id="sidebar-content">
			
			<!--=== Navigation ===-->
			<ul id="nav">
				<li class="current">
					<a href="<?= base_url("/index.php/interactions");?>">
						<i class="icon-dashboard"></i>
						Dashboard
					</a>
				</li>
				<li>
					<a href="<?= base_url("/index.php/users");?>">
						<i class="icon-user"></i>
						Usuários
					</a>
				</li>
				<li>
					<a href="<?= base_url("/index.php/brands");?>">
						<i class="icon-bookmark"></i>
						Marcas
					</a>
				</li>
			
			</ul>
			
			<!-- /Navigation -->
		
		</div>
		<div id="divider" class="resizeable"></div>
	</div>
	<!-- /Sidebar -->
	
	<div id="content">
		<div class="container">
			<!-- Breadcrumbs line -->
			<div class="crumbs">
				<ul id="breadcrumbs" class="breadcrumb">
					<li>
						<i class="icon-home"></i>
						<a href="index.html">Dashboard</a>
					</li>
					<li class="current">
						<a href="pages_calendar.html" title="">Usuários</a>
					</li>
					<li class="current">
						<a  title="">Perfil</a>
					</li>
				</ul>
				
				<ul class="crumb-buttons">
					<li><a title=""><i class="icon-signal"></i><span>Statistics</span></a></li>
				
				</ul>
			</div>
			<!-- /Breadcrumbs line -->
			
			<!--=== Page Header ===-->
			<div class="page-header">
				<div class="page-title">
					<h3>Perfil</h3>
				</div>
				
				<!-- Page Stats -->
				<ul class="page-stats">
					<li>
						<div id="sparkline-bar2" class="graph sparkline hidden-xs">5,15,20,30,35,40,50,55,60,70,80,90,100,105</div>
					</li>
				</ul>
				<!-- /Page Stats -->
			</div>
			<!-- /Page Header -->
			
			<!--=== Page Content ===-->
			<!--=== Inline Tabs ===-->
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-3">
						<div class="list-group">
							<li class="list-group-item no-padding">
								<img src="<?= base_url(); ?>/statics/assets/img/demo/avatar-large.jpg" alt="">
							</li>
						</div>
					</div>
					
					<div class="col-md-9">
						<div class="row profile-info">
							<div class="col-md-7">
								<div class="alert alert-info">You will receive all future updates for free!</div>
								<h1>John Doe</h1>
								
								<dl class="dl-horizontal">
									<dt>Description lists</dt>
									<dd>A description list is perfect for defining terms.</dd>
									<dt>Euismod</dt>
									<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
									<dd>Donec id elit non mi porta gravida at eget metus.</dd>
									<dt>Malesuada porta</dt>
									<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
									<dt>Felis euismod semper eget lacinia</dt>
									<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
								</dl>
								
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.</p>
							</div>
							<div class="col-md-5">
								<div class="widget">
									<div class="widget-header">
										<h4><i class="icon-reorder"></i> Sales</h4>
									</div>
									<div class="widget-content">
										<div id="chart_filled_blue" class="chart"></div>
									</div>
								</div>
							</div>
						</div> <!-- /.row -->
						
					
					</div> <!-- /.col-md-9 -->
				</div>
			</div> <!-- /.row -->
			<!-- /Page Content -->
		</div>
		<!-- /.container -->
	
	</div>
</div>

<?= include "footer.php"?>