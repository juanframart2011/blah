<div id="aside" class="app-aside modal fade nav-dropdown" ng-class="{'folded': app.setting.folded}">
	<!-- fluid app aside -->
	<div class="left navside light dk" layout="column">
		<div class="navbar no-radius" style="background-color:#d83f87; color:#FFF;">
			<a class="navbar-brand"><img src="../img/logo.png" alt="." ><span class="hidden-folded inline">Blah</span></a>
		</div>

		<div flex class="hide-scroll">
			<nav class="scroll nav-light">
				<ul class="nav" ui-nav>
					<li class="nav-header hidden-folded">
						<small class="text-muted">Main</small>
					</li>
					<li ui-sref-active="active">
						<a href="home.php" ui-sref="app.home">
							<span class="nav-icon">
								<i class="material-icons">&#xe3fc;<span ui-include="'assets/images/i_0.svg'"></span></i>
							</span>
							<span class="nav-text">Home</span>
						</a>
					</li>
					<li ui-sref-active="active">
						<a href="eventos.php" ui-sref="app.event">
							<span class="nav-icon">
								<i class="material-icons">&#xe3fc;<span ui-include="'assets/images/i_0.svg'"></span></i>
							</span>
							<span class="nav-text">Eventos</span>
						</a>
					</li>
					<li ui-sref-active="active">
						<a href="client.php" ui-sref="app.event">
							<span class="nav-icon">
								<i class="material-icons">&#xe3fc;<span ui-include="'assets/images/i_0.svg'"></span></i>
							</span>
							<span class="nav-text">Clientes</span>
						</a>
					</li>
					<li ui-sref-active="active">
						<a href="brand.php" ui-sref="app.event">
							<span class="nav-icon">
								<i class="material-icons">&#xe3fc;<span ui-include="'assets/images/i_0.svg'"></span></i>
							</span>
							<span class="nav-text">Marcas</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>