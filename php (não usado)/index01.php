<?php
$msg=0;
$msg= $_POST['msg'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Agência Walk</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" href="img/favicon.png" />

</head>

<body>

  <!-- MENÚ -->
  <div id="menu">
    <a href="">
    <div class="row h-100 align-items-center">
      <img src="img/logotipo-mini.png" class="banner">
    </div>
    </a>
  </div>

  <!-- BANNER -->
    <header id="banner" class="primary py-5 mb-5" style="background: url(img/banner.png) no-repeat; width: 100%; height: 700px; background-size: 100%;">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2" style="font-size: 80px">Soluções criativas<br>para empreendedores<br>digitais.</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- PORTIFÓLIO -->
  <div class="container">

    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <a href="portifolio/queromais.html"><img class="card-img-top" src="img/port/queromais.png" alt=""></a>
        </div>
      </div>
      
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <a href="portifolio/pipocarena.html"><img class="card-img-top" src="img/port/pipocarena.png" alt=""></a>
        </div>
      </div>

            <div class="col-md-4 mb-5">
        <div class="card h-100">
          <a href="portifolio/arenaxbox.html"><img class="card-img-top" src="img/port/arenaxbox.png" alt=""></a>
        </div>
      </div>

    <br>
    
            <div class="col-md-4 mb-5">
        <div class="card h-100">
          <a href="portifolio/andreiapaveski.html"><img class="card-img-top" src="img/port/andreiapaveski.png" alt=""></a>
        </div>
      </div>

            <div class="col-md-4 mb-5">
        <div class="card h-100">
          <a href="portifolio/banners1.html"><img class="card-img-top" src="img/port/banners1.png" alt=""></a>
        </div>
      </div>

            <div class="col-md-4 mb-5">
        <div class="card h-100">
          <a href="portifolio/banners2.html"><img class="card-img-top" src="img/port/banners2.png" alt=""></a>
        </div>
      </div>

      <br>

            <div class="col-md-4 mb-5">
        <div class="card h-100">
          <a href="portifolio/banners3.html"><img class="card-img-top" src="img/port/banners3.png" alt=""></a>
        </div>
      </div>

            <div class="col-md-4 mb-5">
        <div class="card h-100">
          <a href="portifolio/banners4.html"><img class="card-img-top" src="img/port/banners4.png" alt=""></a>
        </div>
      </div>


            <div class="col-md-4 mb-5">
        <div class="card h-100">
          <a href="portifolio/banners5.html"><img class="card-img-top" src="img/port/banners5.png" alt=""></a>
        </div>
      </div>

    </div>

  </div>

  <!-- Formulário -->
  <div class="container-form">  
    <form class="form-contact" tabindex="1" action="envia.php" method="post"></form>
       <input type="text" class="form-contact-input" name="nome" placeholder="Nome" required />  
       <input type="email" class="form-contact-input" name="email" placeholder="Email" required />  
       <input type="tel" class="form-contact-input" name="tel" placeholder="Telefone" />  
       <textarea class="form-contact-textarea" name="conteudo" placeholder="Deixe uma mensagem" required></textarea>  
       <button type="submit" class="form-contact-button">Enviar</button>  
    </form>  
  </div>  


  <!-- Rodapé -->
  <footer class="py-4">
    <div class="container-form">
      <div id="creditos" class="row">
        <a href="https://www.facebook.com/walkbrasil/" target="top"><img src="img/facebook-logo.png" width="50" height="50" class="creditos"></a>
        <a href="https://www.instagram.com/agenciawalk/" target="top"><img src="img/instagram.png" width="50" height="50" class="creditos"></a>
      </div>
      <p class="m-0 text-center text-primary font-weight-bold">Agência Walk - Soluções criativas para empreendedores digitais</p>
      <p id="gab" class="m-0 text-center text-black">Developed by Gabriel Namã</p>
    </div>
  </footer>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
