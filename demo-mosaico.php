<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFICINA DE MARCENARIA</title>
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="scripts/jquery-1.12.0.min.js"></script>
    <script src="scripts/mosaic/js/jquery.jMosaic.js"></script>
  </head>
  <body>
    <header class="site header">
      <h1 class="hidden">Oficina de Marcenaria</h1>
      <div class="logo wrapper">
        <a href="#"><img class="logo" src="img/logox660.png" alt="Logo"></a>
      </div>
      <nav>
        <h1 class="hidden menu-title">
          <a href="#">
            <span>Menu</span>
          </a>
        </h1>
        <ul>
          <li class="menu-item oficina"><a href="#"><span>Oficina</span></a></li>
          <li class="menu-item sobre"><a href="#"><span>Sobre</span></a></li>
          <li class="menu-item detalhes"><a href="#"><span>Detalhes</span></a></li>
          <li class="menu-item registros"><a href="#"><span>Registros</span></a></li>
        </ul>
      </nav>
    </header>
    <main class="main">
      <section>
        <h1 class="hidden">Imagens da Marcenaria</h1>
        <div class="mosaico clearfix">
          <img src="img/mosaico05.jpg">
          <img src="img/mosaico02.jpg">
          <img src="img/mosaico03.jpg">
          <img src="img/mosaico04.jpg">
          <img src="img/mosaico07.jpg">
          <img src="img/mosaico01.jpg">
          <img src="img/mosaico06.jpg">
        </div>
      </section>
      <section class="endereco">
        <h1 class="hidden">Endereço</h1>
        <p><i class="fa fa-map-marker"></i>Rua das Bananas, 43 - Ubatuba, SP - CEP 11680-000 - <i class="fa fa-phone"></i>(12) 3832-3381 - <span class="abrir-mapa"><i class="fa fa-mouse-pointer"></i>Clique para ver o mapa</span></p>
        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1829.4137846866572!2d-45.13244884381708!3d-23.502719484711942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cd50b58d89e64f%3A0xd234554c67abcffa!2sR.+Bananeira%2C+25+-+L%C3%A1zaro+(Praia+Domingos+Dias)%2C+Ubatuba+-+SP%2C+11680-000!5e0!3m2!1spt-BR!2sbr!4v1452742612550" allowfullscreen></iframe>
      </section>
    </main>
    <footer class="footer">
        <p class="lang"><span><a href="#"><img src="img/flag-brasil.png">PT</a></span><span><a href="#"><img src="img/flag-usa.jpg">IN</a></span></p>
        <p><a href="mailto:contato@oficinademarcenaria.com.br">contato@oficinademarcenaria.com.br</a></p>
        <p>Desenvolvido por <a href="#">Epicentro Tecnologia</a></p>
    </footer>
  </body>
  <script type="text/javascript">

  $(window).load(function() {

    $('.mosaico').jMosaic({

      items_type: "img",
      min_row_height: 250,
      margin: 0,
      is_first_big: false
    });

    $('.mosaico img').first().fadeTo( 500, 1, function showNext() {

      $( this ).next( "img" ).fadeTo( 500, 1, showNext );
    });

    $('.abrir-mapa').click(function() {

      $('.mapa').slideToggle('slow').css('display','block');

      ($(this).text() === "Clique para ver o mapa") ? $(this).html("<i class='fa fa-close'></i>Clique para fechar o mapa") : $(this).html("<i class='fa fa-mouse-pointer'></i>Clique para ver o mapa");

      $('html, body').animate({ scrollTop: $('.endereco').offset().top}, 'slow');
    });
  });
  </script>
</html>
