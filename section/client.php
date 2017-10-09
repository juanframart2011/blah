<?
$db->where( "estatus_id", 1 );
$client = $db->get( "client" );

if( $ismobile ){?>

    <section class="row">
        <h1>Clientes</h1>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?
                for( $c = 0; $c < count( $client ); $c++ ):?>
                    
                    <li data-target="#carousel-example-generic" data-slide-to="<?= $c ?>" class="<?= ( $c == 0 )? 'active' : '' ?>"></li>
                <?
                endfor;?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <?
                for( $c = 0; $c < count( $client ); $c++ ):?>
                    <div class="card">
                        <img src="img/cliente/<?= $client[$c]["client_media"] ?>" alt="<?= $client[$c]["client_name"] ?>">
                    </div>

                    <div class="item <?= ( $c == 0 )? 'active' : '' ?>">
                        <img src="img/cliente/<?= $client[$c]["client_media"] ?>" alt="<?= $client[$c]["client_name"] ?>">
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
    
   <section id="clientes" class="block">

        <h1>Clientes</h1>
        
        <div class="cardsHolder">
            <a href="" class="left"></a>
            <a href="" class="right"></a>
            <div class="cards">
                <?
                for( $c = 0; $c < count( $client ); $c++ ):?>
                    <div class="card">
                        <img src="img/cliente/<?= $client[$c]["client_media"] ?>" alt="<?= $client[$c]["client_name"] ?>">
                    </div>
                <?
                endfor;?>
            </div>
        </div>
    </section>
<?
}?>