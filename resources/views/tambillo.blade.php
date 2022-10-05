<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">

      <!----------------------- DATOS DEL SITIO WEB ---------------------------->
      <title>MODULO 5</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../resources/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../resources/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../resources/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../resources/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>

   <!---------------------------- CUERPO DEL SITIO WEB ---------------------------->
   <body class="main-layout">
      <!-------------------- ANIMACION DE ESPERA DE CARGA  ------------------------>
      <div class="loader_bg">
         <div class="loader"><img src="../resources/images/loading.gif" alt="#"/></div>
      </div>

      <!---------------------------------- CABECERA DEL SITIO WEB ------------------------------>
      <header>
         <!----------------------------- SECCION DEL LOGO EN BARRA NAV -------------------------------------->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                            <h1> LOGO TAMBILLO </h1>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--------------------------------------------------------BARA DE NAVEGACION  ---------------------------------------------->
                  <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.html">INICIO</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">CATEGORIAS</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="we-do.html">SUBCATEGORIAS</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="pricing.html">SECCION</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">NOSOTROS</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>

                  <!-- REDES SOCIALES SI SE NECESITA -->
                  {{-- <div class="col-md-2">
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div> --}}

               </div>
            </div>
         </div>
      </header>


      <!------------------------------------ BANNER DE CARRUCEL DE TEXTO E IMAGEN --------------------------------------------->
      <!-- LISTADO DE ELEMENTOS EN EL CARRUCEL-->
      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner1" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- ESTRUCTURA DE 1ER ELEMENTO DEL CARRUCEL-->
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <img class="bann_img" src="../resources/images/banner_ing.jpg" alt="#"/>
                           </div>
                           <div class="col-md-6">
                              <span>01/03</span>
                              <h1>TEXTO BANNER 1</h1>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo</p>
                              <a class="get_btn" href="Javascript:void(0)" role="button">BOTON DE MAS</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ESTRUCTURA DE 2DO ELEMENTO DEL CARRUCEL-->
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <img class="bann_img" src="../resources/images/banner_ing.jpg" alt="#"/>
                           </div>
                           <div class="col-md-6">
                              <span>02/03</span>
                              <h1>TEXTO BANNER 2</h1>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo</p>
                              <a class="get_btn" href="Javascript:void(0)" role="button">BOTON DE MAS</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- ESTRUCTURA DE 3ER ELEMENTO DEL CARRUCEL-->
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <img class="bann_img" src="../resources/images/banner_ing.jpg" alt="#"/>
                           </div>
                           <div class="col-md-6">
                              <span>03/03</span>
                              <h1>TEXTO BANNER 3</h1>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo</p>
                              <a class="get_btn" href="Javascript:void(0)" role="button">BOTON DE MAS</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- FLECHAS DEL CARRUCEL-->
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
               <span class="sr-only">ANTERIOR</span>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
               <span class="sr-only">SIGUIENTE</span>
               </a>
            </div>
         </div>
      </section>


      <!-------------------------------------------- SECCION DE SUBCATEGORIAS  ---------------------------------------------------------------->
      <div class="we_do slin">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>SUBCATEGORIAS </h2>
                  </div>
               </div>
            </div>

            <!-------------------------- 1ER ELEMENTO DE SUBCATEGORIA---------------------->
            <div class="row">
               <div class="col-lg-10 offset-lg-1 col-md-12">
                  <div class="row">
                     <div class="col-md-3 col-sm-6">
                        <div class="we_box">
                           <i><img src="../resources/images/weicon1.png" alt="#"/></i>
                           <h3>imagen 1</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur </p>
                        </div>
                     </div>

                     <!-------------------------- 2DO ELEMENTO DE SUBCATEGORIA---------------------->
                     <div class="col-md-3 col-sm-6">
                        <div class="we_box">
                           <i><img src="../resources/images/weicon2.png" alt="#"/></i>
                           <h3>imagen 2</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur </p>
                        </div>
                     </div>

                     <!-------------------------- 3ER ELEMENTO DE SUBCATEGORIA---------------------->
                     <div class="col-md-3 col-sm-6">
                        <div class="we_box">
                           <i><img src="../resources/images/weicon3.png" alt="#"/></i>
                           <h3>imagen 3</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur </p>
                        </div>
                     </div>

                     <!-------------------------- 4TO ELEMENTO DE SUBCATEGORIA---------------------->
                     <div class="col-md-3 col-sm-6">
                        <div class="we_box">
                           <i><img src="../resources/images/weicon4.png" alt="#"/></i>
                           <h3>imagen 4</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

<!-------------------------------------------- SECCION DE SUBCATEGORIAS 2 ---------------------------------------------------------------->
      <div class="about slin2">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>SUBATEGORIAS 2</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                     <a class="read_more" href="Javascript:void(0)">MÁS</a>
                  </div>
               </div>

               <!------------------------IMAGEN SUBCATEGORIAS 2 ----------------------->
               <div class="col-md-6">
                  <div class="about_img">
                     <figure><img src="../resources/images/about.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <!------------------------SECCION INVOLUCRADOS ----------------------->
      <div  class="experts slin2">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> INVOLUCRADOS </h2>
                  </div>
               </div>
            </div>
            <!------------------------INVOLUCRADOS 1 ----------------------->
            <div class="row">
               <div class="col-lg-8 offset-lg-2 col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <div id="exp" class="experts_box">
                           <div class="experts_img">
                              <figure><img src="../resources/images/blog1.jpg" alt="#"/></figure>
                           </div>
                           <div class="meet">
                              <h3>NOMBRE APELLIDO 1 </h3>
                              <p>Lorem ipsum dolor sit amet, iscing elit, sed do magna </p>
                           </div>
                        </div>
                     </div>

                     <!------------------------INVOLUCRADOS 2 ----------------------->
                     <div class="col-md-4">
                        <div id="exp" class="experts_box">
                           <div class="experts_img">
                              <figure><img src="../resources/images/blog2.jpg" alt="#"/></figure>
                           </div>
                           <div class="meet">
                              <h3>NOMBRE APELLIDO 2</h3>
                              <p>Lorem ipsum dolor sit amet, iscing elit, sed do magna</p>
                           </div>
                        </div>
                     </div>

                     <!------------------------INVOLUCRADOS 3 ----------------------->
                     <div class="col-md-4">
                        <div id="exp" class="experts_box">
                           <div class="experts_img">
                              <figure><img src="../resources/images/blog3.jpg" alt="#"/></figure>
                           </div>
                           <div class="meet">
                              <h3>NOMBRE APELLIDO 3</h3>
                              <p>Lorem ipsum dolor sit amet, iscing elit, sed do magna</p>
                           </div>
                        </div>
                     </div>

                     <!-----------------------BOTON PARA VER MAS ----------------------->
                     <div class="col-md-12">
                        <a class="read_more mar_top exper" href="Javascript:void(0)"> MAS</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

     <!---------------------------------------------------SECCION DE CONTACTANOS -------------------------------------------->
      <!-----------------------TITULO DE CONTACTOS----------------------->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>CONTACTANOS</h2>
                  </div>
               </div>
            </div>

            <!-------------------FORMULARIO DE CONTACTOS ------------------>
            <div class="row">
               <div class="col-md-6 offset-md-3">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Nombre Apellido" type="type" name="Full Name">
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Correo " type="type" name="Email ">
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Teléfono" type="type" name="Phone Number">
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name">Introduce tu mensaje</textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">ENVIAR</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>


      <!----------------------------------------------------------  PIE DE PAGINA ----------------------------------------------------------------------->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> direccion del establecimiento</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> TELF : +593 999 999 999</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> contacto@corrreo.com</a></li>
                     </ul>
                  </div>
                  <div class=" col-md-3 col-sm-6">
                     <h3>Nosotros </h3>
                     <p class="variat">There are many variations of passages of Lorem Ipsum available, but the majority have suffered le</p>
                  </div>
                  <div class=" col-md-3 col-sm-6">
                     <h3>Subcategorias  </h3>
                     <p class="variat" >There are many variations of passages of Lorem Ipsum available, but the majority have suffered le</p>
                  </div>
                  <div class="col-md-2 col-sm-6">
                     <h3>Enlaces</h3>
                     <ul class="link_menu">
                        <li class="active"><a href="index.html">INICIO</a></li>
                        <li><a href="about.html"> CATEGORIAS</a></li>
                        <li><a href="we-do.html">SUBCATEGORIAS</a></li>
                        <li><a href="pricing.html">SECCION</a></li>
                        <li><a href="contact.html">NOSOTROS</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4 col-sm-6">
                     <h3>Suscripciones</h3>
                     <form class="bottom_form">
                        <a class="right_btn" href="Javascript:void(0)"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <input class="enter" placeholder="ingrese el email" type="text" name="Enter your email">
                        <p >Validación de correo electronico </p>
                     </form>
                  </div>
               </div>
            </div>


            <!---------------------------------------------------------SECCION COPYRIGHT ----------------------------------------------->
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>© 2022 All Rights Reserved. Design by estudiantes <a href="Javascript:void(0)"> modulo 5</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>


      <!-- Javascript files-->
      <script src="../resources/js/jquery.min.js"></script>
      <script src="../resources/js/bootstrap.bundle.min.js"></script>
      <script src="../resources/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="../resources/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../resources/js/custom.js"></script>
   </body>
</html>

