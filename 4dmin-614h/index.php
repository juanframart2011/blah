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
			$contact = $db->get( "contact" );
			?>
			<div class="p-a white lt box-shadow">
				<div class="row">
					<div class="col-sm-12">
						<h4 class="m-b-0 _300 text-center">Contactos Registrados</h4>
						<?
						if( count( $contact ) > 0):

							for( $c = 0; $c < count( $contact ); $c++ ):?>
								<div class="row">
									<div class="col-sm-12">
										<p>
											Nombre: <b><?= $contact[$c]["contact_name"] ?></b><br>
											Email: <b><?= $contact[$c]["contact_email"] ?></b><br>
											Empresa: <b><?= $contact[$c]["contact_company"] ?></b><br>
											Fecha de Creación: <b><?= $contact[$c]["contact_creationDate"] ?></b><br>
										</p>
									</div>
								</div>
						<?
							endfor;
						else: ?>
							<small class="text-muted">Aún no tienes registros de contacto</small>
						<?
						endif;?>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	
	<?php include "helper/js_include.php"; ?>
</body>
</html>