<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OFICINA DE MARCENARIA</title>
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="scripts/mosaic/js/jquery.jMosaic.js"></script>
  </head>
  <body>
    <header class="site header">
      <h1 class="hidden">Oficina de Marcenaria</h1>
      <img class="logo" src="img/logox250.png" alt="Logo">
      <nav>
        <h1 class="hidden">Menu</h1>
        <ul>
          <li><a href="#">Oficina</a></li>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Detalhes</a></li>
          <li><a href="#">Registros</a></li>
        </ul>
      </nav>
    </header>
    <main class="main">
      <div class="mosaico clearfix">
        <img src="img/mosaico05.jpg">
        <img src="img/mosaico06.jpg">
        <img src="img/mosaico02.jpg">
        <img src="img/mosaico03.jpg">
        <img src="img/mosaico04.jpg">
        <img src="img/mosaico07.jpg">
        <img src="img/mosaico01.jpg">
      </div>
    </main>
    <footer class="footer">
      <div class="wrapper">
        <p>Rua das Bananas 43 (12) 38323381 CEP 11680 000</p>
        <p class="lang"><span><a href="#">PT</a></span><span><a href="#">IN</a></span></p>
        <p><a href="mailto:contato@oficinademarcenaria.com.br">contato@oficinademarcenaria.com.br</a></p>
      </div>
    </footer>
  </body>
  <script type="text/javascript">

$(window).load(function() {

  $('.mosaico').jMosaic({

    items_type: "img",
    min_row_height: 110,
    margin: 3,
    is_first_big: true
  });

  $('.mosaico img').first().fadeTo( 500, 1, function showNext() {

    $( this ).next( "img" ).fadeTo( 500, 1, showNext );
  });
});
  </script>
</html>
