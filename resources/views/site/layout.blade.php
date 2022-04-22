<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="@yield('description')" name="description">
  <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.ico')}}" rel="icon">
    <!-- <link href="img/logo.png" rel="logo"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- Api do whatsApp-->
    <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5519991205957"><img src="{{asset('assets/img/icons8-whatsapp.gif')}}" style="height:64px; position:fixed; bottom: 95px; right:
		5px; z-index:99999;" class="whatsbtn" data-selector="img" alt="WhatsApp"></a>

</head>

<body>
<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info d-flex justify-content-between">
            <ul class="nav">
                <div class="p-2"><i class="icofont-envelope"></i><a href="mailto:comercial@idssolucoes.com.br">comercial@idssolucoes.com.br</a></div>
                <div class="p-2"><i class="icofont-phone"></i>+55 11 4509-8115</div>
                <div class="p-2"><i class="icofont-dashboard-web"></i><a href="{{ \Illuminate\Support\Facades\URL::route('login') }}">Intranet</a></div>
            </ul>
        </div>
    </div>

</section>

<!-- ======= Header ======= -->
<header id="header">
    <div class="container">

        <!-- <div class="logo">
            <a href="index.html"><img src="img/logo.png" alt="" class="img-fluid img-thumbnail rounded-circle w-25 text-justify"></a>
        </div> -->

        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="#header">Home <i class="la la-angle-down"></i></a></li>
                <li><a href="#about">Sobre Nós</a></li>
                <li><a href="#services">Serviços</a></li>
                <li><a href="#team">Equipe</a></li>

                <li><a href="#contact">Fale conosco</a></li>
            </ul>
        </nav>
        <!-- .nav-menu -->
    </div>
</header>
<!-- End Header -->



@yield('content')



<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row row justify-content-md-center">

                <div class="col-lg-6 col-md-6 footer-info">
                    <h3>IDS Soluções</h3>
                    <p>
                        R. Humberto de Campos 88, <br> Jd Alcântara - São Bernardo do Campo <br> São Paulo - Brasil<br><br>
                        <strong>Phone:</strong> +55 11 4509-8115<br>
                        <strong>Email:</strong> comercial@IDS Soluções.com.br<br>
                    </p>
                    <div class="social-links mt-3">
                        <a href="https://www.facebook.com/ids-solucoes" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/IDS Soluções/?hl=pt-br" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/ids-solucoes/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Links Úteis</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i><a href="#about">Sobre Nós</a></li>
                        <li><i class="bx bx-chevron-right"></i><a href="#portfolio">Serviços</a></li>
                        <li><i class="bx bx-chevron-right"></i><a href="#team">Equipe</a></li>
                        <li><i class="bx bx-chevron-right"></i><a href="#contact">Fale conosco</a></li>
                    </ul>
                </div>


            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>IDS Soluções</span></strong>. Todos os Direitos Reservados
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            Desenvolvido por <a href="https://almeidadeveloper.com">Almeida Dev</a>
        </div>
    </div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
