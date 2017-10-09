<div class="navbar">
    <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up"><i class="material-icons">&#xe5d2;</i></a>
    <div class="navbar-item pull-left h5" ng-bind="$state.current.data.title" id="pageTitle">HOME</div>

    <ul class="nav navbar-nav pull-right">

        <li class="nav-item dropdown">
            <a class="nav-link clear" href data-toggle="dropdown">
                Administrador
                <span class="avatar w-32">
                    <img src="assets/images/a0.jpg" alt="...">
                    <i class="on b-white bottom"></i>
                </span>
            </a>
            <div class="dropdown-menu pull-right dropdown-menu-scale"><a class="dropdown-item" ui-sref="access.signin">Salir</a></div>
        </li>
    </ul>
</div>