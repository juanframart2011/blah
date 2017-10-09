<?
if( $ismobile ){?>
   
   <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a class="text-center" href="#home">Home</a>
                    </li>
                    <li>
                        <a class="text-center" href="#marca">Marcas</a>
                    </li>
                    <li>
                        <a class="text-center" href="#eventos">Eventos</a>
                    </li>
                    <li>
                        <a class="text-center" href="#personal">Personal PR</a>
                    </li>
                    <li>
                        <a class="text-center" href="#clientes">Clientes</a>
                    </li>
                    <li>
                        <a class="text-center" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?
}
else{?>
    <section class="hero" id="home">
        <section class="block pless">
            <section class="more">
                <img src="img/hear.png" alt="">
            </section>
            <section class="menu ">
                <img src="img/logo.png" alt="">
                <img src="img/head-small.png" alt="" class="r-head">
                <ul>
                    <li>
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#marca">Marcas</a>
                    </li>
                    <li>
                        <a href="#eventos">Eventos</a>
                    </li>
                    <li>
                        <a href="#personal">Personal PR</a>
                    </li>
                    <li>
                        <a href="#clientes">Clientes</a>
                    </li>
                    <li>
                        <a href="#contacto">Contacto</a>
                    </li>
                </ul>
                <a href="javascript:void(0);" onclick="$('.menu').removeClass('rb')"  class="cerrar">OCULTAR MENU</a>
                <a href="javascript:void(0);" onclick="$('.menu').addClass('rb')" class="abrir">MENU</a>
            </section>
        </section>
    </section>
<?
}?>