<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="lembrete, anotações">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset ('media/logo1.ico')}}">

    <title>Lembrei - @yield('title')</title>

    <!-- Principal CSS do Bootstrap -->
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">

    <!-- Estilos customizados para esse template -->
    <link href="{{ asset ('template/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('template/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('template/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{ asset ('template/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- CSS local -->
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}" >


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- icones -->
    <script src="https://kit.fontawesome.com/be58be0e2b.js" crossorigin="anonymous"></script>


    <!-- =======================================================
    * Template Name: eNno - v2.0.0
    * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <a href="{{ route('task.index') }}" class="logo mr-auto "><img src="{{ asset ('media/logo1.ico')}}" alt="" class="img-fluid"></a>

      <h1 class="logo mr-auto" style="margin-left: 100px;"><a href="{{ route('task.index') }}">Lembrei!</a></h1>      

      <a href="{{ route('task.create') }}" class="btn btn-outline-success">
        <i class="fas fa-plus"></i>
        Criar Lembrete!
      </a>

    </div>
  </header><!-- End Header -->


  <main role="main" class="col-md-9 ml-sm-auto col-lg-12 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">@yield ('title-content')</h1>
        </div>
            @include('partials._messages')
            @yield ('content')          
      </div>
    </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top mt-3">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <img src="{{ asset ('media/logo.ico')}}" width="100px" height="100px" alt="Crie um lembrete!" class="img-fluid logo mr-auto">
            <h3>Lembrei!</h3>
            <p>Para você nunca se esquecer.</p>
          </div>
        </div>


        <div class="social-links">
          <a href="https://twitter.com/Lucasracki" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.instagram.com/lucas_racki" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/lucasracki" class="github"><i class="bx bxl-github"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Lembrei!</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/enno-free-simple-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="{{ asset ('js/jquery-3.3.1.slim.min.js') }} " ></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{ asset ('js/popper.min.js') }}" ></script>
    <script src="{{ asset ('js/bootstrap.min.js') }}" ></script>

  <!-- template JS Files -->
  <script src="{{ asset ('template/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset ('template/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset ('template/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset ('template/php-email-form/validate.js')}}"></script>
  <script src="{{ asset ('template/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset ('template/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset ('template/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset ('template/venobox/venobox.min.js')}}"></script>
  <script src="{{ asset ('template/owl.carousel/owl.carousel.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset ('js/main.js')}}"></script>

</body>

</html>