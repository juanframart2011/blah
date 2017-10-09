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
			$banner = $db->get( "banner" );
			?>
			<div class="p-a white lt box-shadow">
				<div class="row">
					<div class="col-sm-12">
						<h4 class="m-b-0 _300 text-center">Modificar Home</h4>
						<form action="php/home-update.php" id="form_home" method="post" name="form_home">
							<fieldset class="form-group">
								<label for="banner_media">Url de video de youtube</label>
								<input type="text" class="form-control" id="banner_media" name="banner_media" value="<?= $banner[0]["banner_media"] ?>" required>
							</fieldset>
							<fieldset class="form-group">
								<input type="hidden" id="banner_id" name="banner_id" value="<?= $banner[0]["banner_id"] ?>">
								<label for="banner_description">Descripción del Home</label>
								<textarea class="form-control" id="banner_description" name="banner_description" required><?= $banner[0]["banner_description"] ?></textarea>
							</fieldset>
							<button type="submit" class="btn btn-primary btn-block">Modificar HOME</button>
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