
<?= include "header.php";


?>

<div id="container">
	<div id="sidebar" class="sidebar-fixed">
		<div id="sidebar-content">
			
			<!--=== Navigation ===-->
			<ul id="nav">
				<li class="current">
					<a href="<?= base_url("/index.php/interactions");?>">
						<i class="icon-dashboard"></i>
                        Interações
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
					<li class="current">
						<a title="">Usuários</a>
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
					<h3>Usuários cadastrados</h3>
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
			
			<!--=== Normal ===-->
			<div class="row">
				<div class="col-md-12">
					<div class="widget box">
						<div class="widget-header">
							<h4><i class="icon-reorder"></i> Listagem</h4>
							<div class="toolbar no-padding">
								<div class="btn-group">
									<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
								</div>
							</div>
						</div>
						<div class="widget-content">
							<table id="users" class="table table-striped table-bordered table-hover table-checkable">
								<thead>
								<tr>
									<th style="width: 80px;"></th>
									<th style="width: 80px;">ID</th>
                                    <th>Nome</th>
                                    <th>Gênero</th>
                                    <th>Nascido em:</th>
                                    <th>Registrado em:</th>
                                    <th>E-mail</th>
                                    <th>País</th>
                                    <th style="width: 30px;">Ver</th>
								</tr>
								</thead>
								<tbody>
								
								<?php
								 //date('j/n/Y', 287182953);
								foreach($usuarios as $row):
									?>
									<tr>
										<td><img src="<?= $row->picture->thumbnail; ?>"></td>
										<td><?= $row->id; ?></td>
										<td><?= ucfirst ($row->name->title)." ".ucfirst($row->name->first)." ".ucfirst($row->name->last); ?></td>
                                        <td><?= $row->gender; ?></td>
                                        <td><?= date('j/n/Y', $row->dob); ?></td>
                                        <td><?= date('j/n/Y', $row->registered); ?></td>
                                        <td><?= $row->email; ?></td>
                                        <td><?= $row->nat; ?></td>
                                        <td><a href="<?= base_url("index.php/users/profile/".$row->id."");?>" class="btn"><i class="icon-eye-open"></i></a></td>
									</tr>
									<?php
								endforeach;
								?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- /Normal -->
		
		</div>
		<!-- /.container -->
	
	</div>
</div>

<?= include "footer.php"?>