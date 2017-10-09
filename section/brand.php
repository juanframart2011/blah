<?
$db->where( "estatus_id", 1 );
$brand = $db->get( "brand" );

if( $ismobile ){?>

    <section class="row">
        <h1>Marcas</h1>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?
                for( $b = 0; $b < count( $brand ); $b++ ):?>
                    
                    <li data-target="#carousel-example-generic" data-slide-to="<?= $b ?>" class="<?= ( $b == 0 )? 'active' : '' ?>"></li>
                <?
                endfor;?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?
                for( $b = 0; $b < count( $brand ); $b++ ):?>
                    
                    <div class="item <?= ( $b == 0 )? 'active' : '' ?>">
                        <img src="img/marca/<?= $brand[$b]["brand_media"] ?>" alt="<?= $brand[$b]["brand_name"] ?>">
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
<?
}
else{?>
    
    <section class="block">
        <h1 id="marca">Marcas</h1>
        <div class="cardsHolder">

            <a href="javascript:void(0)" onclick="nextSlide()" class="left" ></a>
            <a href="#" class="right"></a>
            
            <div class="cards" id="marcas">
                <?
                for( $b = 0; $b < count( $brand ); $b++ ):?>
                    <div class="card">
                        <img src="img/marca/<?= $brand[$b]["brand_media"] ?>" alt="<?= $brand[$b]["brand_name"] ?>">
                    </div>
                <?
                endfor;?>
            </div>
        </div>
    </section>
<?
}?>