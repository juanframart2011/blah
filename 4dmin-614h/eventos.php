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
			$event = $db->get( "event" );
			?>
			<div class="p-a white lt box-shadow">
				
				<div class="row">
					<div class="col-sm-12">
						<h4 class="m-b-0 _300 text-center">Eventos</h4>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Descripción</th>
									<th>Imagen Externa</th>
									<th>Imagen Interna</th>
									<th>Fecha de Creación</th>
									<th>Acción</th>
								</tr>
							</thead>
							<tbody>
								
								<?
								if( count( $event ) > 0):

									for( $c = 0; $c < count( $event ); $c++ ):?>
										<tr>
											<td><?= $event[$c]["event_name"] ?></td>
											<td><?= $event[$c]["event_description"] ?></td>
											<td>
												<img class="img-responsive" src="../img/evento/<?= $event[$c]["event_hero"] ?>" />
											</td>
											<td>
												<img class="img-responsive" src="../img/evento/<?= $event[$c]["event_media"] ?>" />
											</td>
											<td><?= $event[$c]["event_creationDate"] ?></td>
											<td>
												<form action="php/event-action.php" method="post">
													<?
													if( $event[$c]["estatus_id"] == 1 ):?>
														<input id="event_id" name="event_id" type="hidden" value="<?= $event[$c]["event_id"] ?>">
														<input id="event_action" name="event_action" type="hidden" value="2">
														<button type="submit" class="btn btn-danger">Desactivar</button>
													<?
													else:?>

														<input id="event_id" name="event_id" type="hidden" value="<?= $event[$c]["event_id"] ?>">
														<input id="event_action" name="event_action" type="hidden" value="1">
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
											<h3 class="text-muted text-center">Aún no tienes eventos</h3>
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
						<h4 class="m-b-0 _300 text-center">Crear Evento</h4>
						<form action="php/event-create.php" enctype="multipart/form-data" id="form_event" method="post" name="form_event">
							<fieldset class="form-group">
								<label for="event_name">Nombre del Evento</label>
								<input type="text" class="form-control" id="event_name" name="event_name" placeholder="Evento Example" required>
							</fieldset>
							<fieldset class="form-group">
								<label for="event_name">Descripción del Evento</label>
								<textarea class="form-control" id="event_description" name="event_description" required></textarea>
							</fieldset>
							<fieldset class="form-group">
								<label for="event_name">Imagen Externa del Evento</label>
								<input type="file" class="form-control" id="event_hero" name="event_hero" required>
							</fieldset>
							<fieldset class="form-group">
								<label for="event_name">Imagen Interna del Evento</label>
								<input type="file" class="form-control" id="event_media" name="event_media" required>
							</fieldset>
							<button type="submit" class="btn btn-primary btn-block">Crear Evento</button>
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