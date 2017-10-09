<?
$db->where( "estatus_id", 1 );
$db->orderBy( "event_creationDate" );
$event = $db->get( "event" );
?>

<?
if( $ismobile ){?>
   
   <section class="row">
        
        <h1>Eventos</h1>

        <?
        if( count( $event ) > 0 ):?>
            
            <?
            for( $e = 0; $e < count( $event ); $e++ ):
            ?>
                <div class="col-sm-12 col-xs-12 event" data-description="<?= $event[$e]["event_description"] ?>" data-media="<?= $event[$e]["event_media"] ?>" data-name="<?= $event[$e]["event_name"] ?>">
                    <h2 class="event-title row"><?= $event[$e]["event_name"] ?></h2>
                    <img class="img-responsive" src="img/evento/hero/<?= $event[$e]["event_hero"] ?>">
                </div>
            <?
            endfor;?>
        <?
        endif;?>
    </section>
<?
    include( "helper/event-message.php" );
}
else{?>

    <section id="eventos" class="block">
        <h1>Eventos</h1>
    </section>

    <section class="event">
        
        <?
        if( count( $event ) > 0 ):?>

            <div class="big lnk" data-description="<?= $event[0]["event_description"] ?>" data-media="<?= $event[0]["event_media"] ?>" data-name="<?= $event[0]["event_name"] ?>" style="background-image:url('img/evento/hero/<?= $event[0]["event_hero"] ?>')">
                <span><?= $event[0]["event_name"] ?></span>
            </div>
            
            <?
            if( !empty( $event[1]["event_hero"] ) ):?>

                <div class="half lnk" data-description="<?= $event[1]["event_description"] ?>" data-media="<?= $event[1]["event_media"] ?>" data-name="<?= $event[1]["event_name"] ?>" style="background-image:url('img/evento/hero/<?= $event[1]["event_hero"] ?>')">
                    <span><?= $event[1]["event_name"] ?></span>
                </div>
                <?

                if( !empty( $event[2]["event_hero"] ) ):?>

                    <div class="half">
                        <?
                        for( $e = 2; $e < count( $event ); $e++ ):
                        ?>
                            <div class="half lnk" data-description="<?= $event[$e]["event_description"] ?>" data-media="<?= $event[$e]["event_media"] ?>" data-name="<?= $event[$e]["event_name"] ?>" style="background-image:url('img/evento/hero/<?= $event[$e]["event_hero"] ?>')">
                                <span><?= $event[$e]["event_name"] ?></span>
                            </div>
                        <?
                        endfor;?>
                    </div>
                    <?/*
                    <div class="clear"></div>
                    
                    <div class="moreG">

                        <div class="half">
                            <div class="half lnk" style="background-image:url('stock/one08.jpg')">
                                <span>Nombre del evento</span>
                            </div>
                            <div class="half lnk" style="background-image:url('stock/one05.jpg')">
                                <span>Nombre del evento</span>
                            </div>
                        </div>

                        <div class="half lnk" style="background-image:url('stock/one02.jpg')">
                            <span>Nombre del evento</span>
                        </div>

                        <div class="half lnk" style="background-image:url('stock/one03.jpg')">
                            <span>Nombre del evento</span>
                        </div>
                        <div class="half">
                            <div class="half lnk" style="background-image:url('stock/one09.jpg')">
                                <span>Nombre del evento</span>
                            </div>
                            <div class="half lnk" style="background-image:url('stock/one06.jpg')">
                                <span>Nombre del evento</span>
                            </div>
                        </div>

                        <div class="half">
                            <div class="half lnk" style="background-image:url('stock/one11.jpg')">
                                <span>Nombre del evento</span>
                            </div>
                            <div class="half lnk" style="background-image:url('stock/one12.jpg')">
                                <span>Nombre del evento</span>
                            </div>
                        </div>

                        <div class="half lnk" style="background-image:url('stock/one01.jpg')">
                            <span>Nombre del evento</span>
                        </div>
                    </div>
                    <a href="javascript:void(0)" onclick="$('.moreG').slideDown(); $(this).fadeTo(100 , 0)" class="btnmore">VER TODOS</a>*/?>
                <?
                endif;
            endif;
        endif;?>
    </section>

    <section class="overgallery">

        <div class="bg"></div>

        <div class="cnt">
            <a href="javascript:void(0);" onclick="$('.overgallery').fadeOut()" class="closeOverGallery"></a>
            <div class="main">
                <div class="txt">
                    <h1></h1>
                    <p></p>
                </div>
                <div class="imgMain" style=""></div>
            </div><?/*
            <div class="other">
                <div class="hold">
                    <a href="">
                    <img src="stock/one14.jpg" alt=""> 
                    </a>
                    <a href="">
                    <img src="stock/one01.jpg" alt=""> 
                    </a>
                    <a href="">
                    <img src="stock/one02.jpg" alt=""> 
                    </a>
                    <a href="">
                    <img src="stock/one03.jpg" alt=""> 
                    </a>
                    <a href="">
                    <img src="stock/one04.jpg" alt=""> 
                    </a>
                    <a href="">
                    <img src="stock/one05.jpg" alt=""> 
                    </a>
                    <a href="">
                    <img src="stock/one06.jpg" alt=""> 
                    </a>
                    <a href="">
                    <img src="stock/one07.jpg" alt=""> 
                    </a>
                    <a href="">
                    <img src="stock/one08.jpg" alt=""> 
                    </a>
                    <a href="">
                    <img src="stock/one09.jpg" alt=""> 
                    </a>
                    <a href="">
                    <img src="stock/one10.jpg" alt=""> 
                    </a>
                    <a href="">
                    <img src="stock/one11.jpg" alt=""> 
                    </a>
                    <a href="">
                    <img src="stock/one12.jpg" alt=""> 
                    </a>
                    <a href="">
                    <img src="stock/one13.jpg" alt=""> 
                    </a>
                </div>
            </div>*/?>
        </div>
    </section>
<?
}?>