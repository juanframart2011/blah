<!DOCTYPE html>
<html lang="en">
<?php include "helper/head.php"; ?>
<body>
	<div class="app" id="app">

		<?php include "helper/aside.php"; ?>

		<div id="content" class="app-content box-shadow-z0" role="main">
			<div class="app-header white box-shadow">
				<?php include "helper/header.php"; ?>
			</div>
			<div class="app-footer" >
				<?php include "helper/footer.php"; ?>
			</div>
			<div ui-view class="app-body" id="view">
			
			<?
			include "../conn.php";
			$client = $db->get( "client" );
			?>
			<div class="p-a white lt box-shadow">
				
				<div class="row">
					<div class="col-sm-12">
						<h4 class="m-b-0 _300 text-center">clientes</h4>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Descripción</th>
									<th>Imagen</th>
									<th>Fecha de Creación</th>
									<th>Acción</th>
								</tr>
							</thead>
							<tbody>
								
								<?
								if( count( $client ) > 0):

									for( $c = 0; $c < count( $client ); $c++ ):?>
										<tr>
											<td><?= $client[$c]["client_name"] ?></td>
											<td><?= $client[$c]["client_description"] ?></td>
											<td>
												<img class="img-responsive" src="../img/cliente/<?= $client[$c]["client_media"] ?>" />
											</td>
											<td><?= $client[$c]["client_creationDate"] ?></td>
											<td>
												<form action="php/client-action.php" method="post">
													<?
													if( $client[$c]["estatus_id"] == 1 ):?>
														<input id="client_id" name="client_id" type="hidden" value="<?= $client[$c]["client_id"] ?>">
														<input id="client_action" name="client_action" type="hidden" value="2">
														<button type="submit" class="btn btn-danger">Desactivar</button>
													<?
													else:?>

														<input id="client_id" name="client_id" type="hidden" value="<?= $client[$c]["client_id"] ?>">
														<input id="client_action" name="client_action" type="hidden" value="1">
														<button type="submit" class="btn btn-success">Activar</button>
													<?
													endif;?>
												</form>
											</td>
										</tr>
									<?
									endfor;
								else: ?>
									<tr>
										<td colspan="6">
											<h3 class="text-muted text-center">Aún no tienes clientes</h3>
										</td>
									</tr>
								<?
								endif;?>
							</tbody>
						</table>
					</div>
				</div>
				
				<br><br>
				
				<div class="row">
					<div class="col-sm-12">
						<h4 class="m-b-0 _300 text-center">Crear cliente</h4>
						<form action="php/client-create.php" enctype="multipart/form-data" id="form_client" method="post" name="form_client">
							<fieldset class="form-group">
								<label for="client_name">Nombre del cliente</label>
								<input type="text" class="form-control" id="client_name" name="client_name" placeholder="cliente Example" required>
							</fieldset>
							<fieldset class="form-group">
								<label for="client_name">Descripción del cliente</label>
								<textarea class="form-control" id="client_description" name="client_description" required></textarea>
							</fieldset>
							<fieldset class="form-group">
								<label for="client_name">Imagen del cliente</label>
								<input type="file" class="form-control" id="client_hero" name="client_hero" required>
							</fieldset>
							<button type="submit" class="btn btn-primary btn-block">Crear cliente</button>
						</form>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	
	<?php include "helper/js_include.php"; ?>
</body>
</html>