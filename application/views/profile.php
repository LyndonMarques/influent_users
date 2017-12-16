
<?= include "header.php";

//echo "<pre>";
//print_r($usuario);die;

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
					<li>
						<i class="icon-home"></i>
                        <a href="<?= base_url("/index.php/users");?>" title="">Usuários</a>
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
					<h3>Perfil do usuário</h3>
				</div>
				<!-- /Page Stats -->
			</div>
			<!-- /Page Header -->
			
			<!--=== Page Content ===-->
			<!--=== Inline Tabs ===-->
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4">
						<div class="list-group">
							<li class="list-group-item ">
								<img src="<?= $usuario->picture['large'];?>" width="300" alt="">
							</li>
						</div>
					</div>
					
					<div class="col-md-8">
						<div class="row profile-info">
							
							<div class="col-md-9">
								<h1><?= ucfirst ($usuario->name['title'])." ".ucfirst($usuario->name['first'])." ".ucfirst($usuario->name['last']); ?></h1>
								
								<dl class="dl-horizontal">
									<dt>Genero</dt>
									<dd><?php
										switch ($usuario->gender){
											case $usuario->gender = "male":
												echo "Masculino";
												break;
											case $usuario->gender = "female":
												echo "Feminino";
												break;
										}
										?></dd>
									
									<dt>Nascido em:</dt>
									<dd><?= date('j/n/Y', $usuario->dob); ?></dd>
									
									<dt>E-mail</dt>
									<dd><?= $usuario->email; ?></dd>
									
									<dt>Endereço: </dt>
									<dd><?= $usuario->location['street']; ?></dd>
									
									<dt>Cidade: </dt>
									<dd><?= $usuario->location['city']; ?></dd>
									
									<dt>Cep: </dt>
									<dd><?= $usuario->location['postcode']; ?></dd>
									
									<dt>Estado: </dt>
									<dd><?= $usuario->location['state']; ?></dd>
									
									<dt>País: </dt>
									<dd><?= $usuario->nat; ?></dd>
									
									<dt>Telefone: </dt>
									<dd><?= $usuario->phone; ?></dd>
									
									<dt>Celular: </dt>
									<dd><?= $usuario->cell; ?></dd>
									
									<dt>Registado em: </dt>
									<dd><?= date('j/n/Y', $usuario->registered); ?></dd>
								
								</dl>
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