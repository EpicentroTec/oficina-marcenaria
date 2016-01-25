$(window).load(function() {

    $('.menu-title a').click(function() {

        $('.menu-item').slideToggle();
        $(this).toggleClass('active');
    });

    $('.mosaico').jMosaic({

        items_type: "img",
        min_row_height: 240,
        margin: 0,
        is_first_big: false
    });

    $('.mosaico img').first().fadeTo( 500, 1, function showNext() {

        $( this ).next( "img" ).fadeTo( 500, 1, showNext );
    });
});

$('.barra-lateral img').click(function() {

    $('.barra-lateral img').removeClass('active');

    $(this).addClass('active');

    var background = $(this).attr('src');

    $('.box-imagem').attr('style','background-image: url('+background+')');
});
