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
			$brand = $db->get( "brand" );
			?>
			<div class="p-a white lt box-shadow">
				
				<div class="row">
					<div class="col-sm-12">
						<h4 class="m-b-0 _300 text-center">marcas</h4>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Descripción</th>
									<th>Imagen Externa</th>
									<th>Fecha de Creación</th>
									<th>Acción</th>
								</tr>
							</thead>
							<tbody>
								
								<?
								if( count( $brand ) > 0):

									for( $c = 0; $c < count( $brand ); $c++ ):?>
										<tr>
											<td><?= $brand[$c]["brand_name"] ?></td>
											<td><?= $brand[$c]["brand_description"] ?></td>
											<td>
												<img class="img-responsive" src="../img/marca/<?= $brand[$c]["brand_media"] ?>" />
											</td>
											<td><?= $brand[$c]["brand_creationDate"] ?></td>
											<td>
												<form action="php/brand-action.php" method="post">
													<?
													if( $brand[$c]["estatus_id"] == 1 ):?>
														<input id="brand_id" name="brand_id" type="hidden" value="<?= $brand[$c]["brand_id"] ?>">
														<input id="brand_action" name="brand_action" type="hidden" value="2">
														<button type="submit" class="btn btn-danger">Desactivar</button>
													<?
													else:?>

														<input id="brand_id" name="brand_id" type="hidden" value="<?= $brand[$c]["brand_id"] ?>">
														<input id="brand_action" name="brand_action" type="hidden" value="1">
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
											<h3 class="text-muted text-center">Aún no tienes marcas</h3>
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
						<h4 class="m-b-0 _300 text-center">Crear Marca</h4>
						<form action="php/brand-create.php" enctype="multipart/form-data" id="form_brand" method="post" name="form_brand">
							<fieldset class="form-group">
								<label for="brand_name">Nombre del Marca</label>
								<input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Marca Example" required>
							</fieldset>
							<fieldset class="form-group">
								<label for="brand_name">Descripción del Marca</label>
								<textarea class="form-control" id="brand_description" name="brand_description" required></textarea>
							</fieldset>
							<fieldset class="form-group">
								<label for="brand_name">Imagen de la marca</label>
								<input type="file" class="form-control" id="brand_hero" name="brand_hero" required>
							</fieldset>
							<button type="submit" class="btn btn-primary btn-block">Crear Marca</button>
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