function chkempty(e) {
    var inp = $(e);
    if (inp.val() != "") {
        inp.addClass("active")
    } else {
        inp.removeClass("active")
    }
}

function checkCards(){
    var count = $("#marcas > .card").length;
    var add = 100 * ( Math.floor( count / 4 ) )
    $("#marcas").css({width:(count*250)+add+100+"px"})
}

function nextSlide(){
    
    var sl = $("#marcas")
    var left = sl.parent().offset().left - sl.offset().left
    var holder = sl.parent().outerWidth() - 100
    var size = sl.width()
    var mov = (size / holder+100) - (left/holder+100);
    
    if ( mov > 1 ){
        if( left == 0 ){
            sl.css({left:((-1)*(holder))+"px"})
        }else{
            console.log( left , holder , (left / holder ) )
            sl.css({left:((( (holder / left)+1 )*-1)*(holder))+"px"})
        }
    }
    else if( mov != 0 ){
        
    }
}

$(document).ready(function(){

    checkCards();

    $( "#form_contact1" ).submit( function( event ){

        event.preventDefault();

        if( !$( "#mail" ).val() || !$( "#phone" ).val() ){

            $( ".message-modal" ).find( ".modal-title" ).html( "Error en Contacto" ).css( "color", "red" );
            $( ".message-modal" ).find( ".modal-body" ).html( "Email y Teléfono son obligatorio" ).css( "color", "red" );
            $( ".message-modal" ).modal( "show" );
        }
        else{

            $.ajax({
                url: $( "#form_contact1" ).attr( "action" ),
                type: 'POST',
                dataType: 'json',
                data: $( "#form_contact1" ).serialize(),
            })
            .done(function( data ){
                
                if( data.result == 2 ){

                    $( ".message-modal" ).find( ".modal-title" ).html( "Error en Contacto" ).css( "color", "red" );
                    $( ".message-modal" ).find( ".modal-body" ).html( data.message ).css( "color", "red" );
                }
                else{

                    document.getElementById("form_contact1").reset();
                    $( ".message-modal" ).find( ".modal-title" ).html( "Exito en Contacto" ).css( "color", "green" );
                    $( ".message-modal" ).find( ".modal-body" ).html( data.message ).css( "color", "green" );
                }

                $( ".message-modal" ).modal( "show" );
            })
            .fail(function( error ){

                console.log( error );
            });
            
        }
    });

    $( "#form_contact2" ).submit( function( event ){

        event.preventDefault();

        if( !$( "#nombre" ).val() || !$( "#mail2" ).val() || !$( "#phone2" ).val() ){

            $( ".message-modal" ).find( ".modal-title" ).html( "Error en Contacto" ).css( "color", "red" );
            $( ".message-modal" ).find( ".modal-body" ).html( "Nombre, Email y Teléfono son obligatorio" ).css( "color", "red" );
            $( ".message-modal" ).modal( "show" );
        }
        else{

            $.ajax({
                url: $( "#form_contact2" ).attr( "action" ),
                type: 'POST',
                dataType: 'json',
                data: $( "#form_contact2" ).serialize(),
            })
            .done(function( data ){
                
                if( data.result == 2 ){

                    $( ".message-modal" ).find( ".modal-title" ).html( "Error en Contacto" ).css( "color", "red" );
                    $( ".message-modal" ).find( ".modal-body" ).html( data.message ).css( "color", "red" );
                }
                else{

                    document.getElementById("form_contact2").reset();
                    $( ".message-modal" ).find( ".modal-title" ).html( "Exito en Contacto" ).css( "color", "green" );
                    $( ".message-modal" ).find( ".modal-body" ).html( data.message ).css( "color", "green" );
                }

                $( ".message-modal" ).modal( "show" );
            })
            .fail(function( error ){

                console.log( error );
            });
            
        }
    });

    $(".menu a").click(function(e){

        e.preventDefault();
        var id = $(this).attr("href");

        $("body,html").animate({scrollTop:$(id).offset().top-80} , 500 );

        if( $(window).width() < 500 ){

            $('.menu').removeClass('rb')
        }
    });

    $( ".lnk" ).click(function(){

        var name = $( this ).data( "name" );
        var description = $( this ).data( "description" );
        var media = "img/evento/" + $( this ).data( "media" );

        $( ".overgallery" ).find( "h1" ).html( name );
        $( ".overgallery" ).find( "p" ).html( description );
        $( ".overgallery" ).find( ".imgMain" ).css( "background-image", "url('"+media+"')" );

        $( ".overgallery" ).fadeIn();
    });

    $(".other a").click( function(e){

        e.preventDefault();
        console.log(e.target)
        var imgUrl = $( e.target ).attr("src")
        $(".imgMain").css({backgroundImage:"url('"+imgUrl+"')"})
    });

    $(window).scroll(function(){
        
        if( $(window).scrollTop() > 1000 ){

            if( $(window).width() > 500 ){

                $(".menu").addClass("active")
            }
            else{

                $(".menu").removeClass("active")    
            }
        }
        else{

            $(".menu").removeClass("active")
        }
    });
});