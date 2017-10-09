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
        
        <? include( "helper/menu.php" ) ?>
        
        <section class="intro">
            <section class="video">
                <iframe width="100%" src="<?= $banner[0]["banner_media"] ?>" frameborder="0" allowfullscreen></iframe>
            </section>
            <p><?= $banner[0]["banner_description"] ?></p>
        </section>

        <?
        include( "section/brand.php" );
        include( "section/event.php" );
        ?>

        <section id="personal" class="block mbless">
            <h1>Personal PR</h1>
        </section>

        <div class="personal">
            <section class="block ">
                <p>
                    Regístrate con tu email y teléfono para estar conectado a los mejores eventos, restaurantes y antros de la ciudad.
                </p>
                <div class="form">
                    <form action="php/contact.php" id="form_contact1" name="form_contact1">
                        <p>
                            Me pueden contactar en:
                        </p>
                        <div class="inpHolder">
                            <div class="inp">
                                <input type="text" onchange="chkempty(this)" id="mail" name="mail" value="" placeholder="">
                                <label for="mail">Tu email</label>
                            </div>
                            <input id="type_contact" name="type_contact" type="hidden" value="1">
                            <div class="inp">
                                <input type="text" onchange="chkempty(this)" id="phone" name="phone" value="" placeholder="">
                                <label for="phone">Tu teléfono</label>
                            </div>
                            <div>
                                <input type="submit" value="Enviar">
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>

        <?
        include( "section/client.php" );
        include( "section/contact.php" );
        include( "helper/message.php" ); ?>
        
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>