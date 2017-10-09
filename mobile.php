<?
include( "php/decteted_mobile.php" );
include( "conn.php" );

$db->where( "estatus_id", 1 );
$banner = $db->get( "banner" );
?>
<!DOCTYPE html>
<html lang="es">

    <? include( "helper/head.php" ) ?>
    <body>
        <div class="container">
            
            <? include( "helper/menu.php" ) ?>
            
            <header class="row">
                <img class="img-responsive" src="img/header.jpg" alt="BLAH">
                <img class="head-small img-responsive" src="img/head-small.png" alt="Can You hear that blah?">
            </header>

            <section class="row video">
                <div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?= $banner[0]["banner_media"] ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <p class="text-justify"><?= $banner[0]["banner_description"] ?></p>
                </div>
            </section>
            
            <? include( "section/event.php" ) ?>
            
            <? include( "section/brand.php" ) ?>

            <section class="row">
                <h1>Clientes</h1>

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?
                        for( $c = 1; $c < 5; $c++ ):?>
                            
                            <li data-target="#carousel-example-generic" data-slide-to="<?= $c ?>" class="<?= ( $c == 1 )? 'active' : '' ?>"></li>
                        <?
                        endfor;?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?
                        for( $c = 1; $c < 5; $c++ ):?>
                            
                            <div class="item <?= ( $c == 1 )? 'active' : '' ?>">
                                <img src="img/cliente/logo<?= $c ?>.jpg" alt="Cliente #<?= $c ?>">
                                <div class="carousel-caption"></div>
                            </div>
                        <?
                        endfor;?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    </a>
                </div>
            </section>
            
            <section class="row">
                <h1 class="col-sm-12 col-xs-12">Contacto</h1>

                <div class="col-sm-12 col-xs-12">
                    <form action="php/contact.php" id="form_contact2" name="form_contact2">
                        <p>
                            Hola mi nombre es y me pueden contactar:
                        </p>
                        <div class="inpHolder">
                            <div class="form-group">
                                <label for="nombre">Tu Nombre</label>
                                <input class="form-control" type="text" onchange="chkempty(this)" id="nombre" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="company">Tu Empresa</label>
                                <input class="form-control" type="text" onchange="chkempty(this)" id="company" name="company">
                            </div>
                        </div>
                        <input id="type_contact" name="type_contact" type="hidden" value="2">
                        <div class="inpHolder">
                            <div class="form-group">
                                <label for="mail2">Tu email</label>
                                <input class="form-control" type="text" onchange="chkempty(this)" id="mail2" name="mail2">
                            </div>
                            <div class="form-group">
                                <label for="phone2">Tu teléfono</label>
                                <input class="form-control" type="text" onchange="chkempty(this)" id="phone2" name="phone2">
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-default" type="submit">Enviar</button>
                        </div>
                    </form>
                    <center>
                        <br />
                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <br />
                        <br />
                        <br />
                        <a href="tel:+5215559572870">Tel/Whatsapp. 5559572870</a>
                        <br />
                        <a href="mailto:contacto@blah.com.mx">contacto@blah.com.mx</a>
                    </center>
                </div>
            </section>

            <? include( "helper/message.php" ); ?>
        </div>
        
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            $( document ).ready( function(){

                $('.carousel').carousel();
                
                $( ".event" ).click( function(){

                    $( ".event-modal" ).find( ".modal-title" ).html( $( this ).data( "name" ) );
                    $( ".event-modal" ).find( ".modal-body" ).html( "<img class='img-responsive' src='img/evento/"+$( this ).data( "media" )+"' /><p>" + $( this ).data( "description" ) + "</p>" );
                    $( ".event-modal" ).modal( "show" );
                });
            });
        </script>
    </body>
</html>