@extends('Site.layout')
@section('title', 'Home - IDS Soluções')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url('{{asset('assets/img/slide/slide-1.jpg')}}');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animated fadeInDown">Nós somos a <span>IDS Soluções</span></h2>
                                <p class="animated fadeInUp">Pronta para o Futuro, preparada para sua Empresa.</p>
                                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Leia mais</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url('{{asset('assets/img/slide/slide-2.jpg')}}');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animated fadeInDown">Especialistas em Consultoria Financeira</h2>
                                <p class="animated fadeInUp">Fale conosco e pare de pagar juros abusivos!</p>
                                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Saiba mais</a>
                            </div>
                        </div>
                    </div>


                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row no-gutters">
                    <div class="col-lg-6 video-box">
                        <img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                        <div class="section-title">
                            <h2>Sobre Nós</h2>
                            <p>Somos uma empresa especializada em serviços de consultoria financeira. </p><br>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-dollar"></i></div>
                            <h4 class="title"><a href="#Intranet">Consultoria Financeira</a></h4>
                            <p class="description">Desenvolvemos um método único para melhorar sua vida! </p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-check-circle"></i></div>
                            <h4 class="title"><a href="">Confiabilidade</a></h4>
                            <p class="description">Temos mais de 10 anos atuando no mercado.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= About Lists Section ======= -->
        <section class="about-lists">
            <div class="container">

                <div class="row no-gutters">

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
                        <span>01</span>
                        <h4>Busca e Apreensáo</h4>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
                        <span>02</span>
                        <h4>Redução de Juros Abusivos</h4>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
                        <span>03</span>
                        <h4> Assessoria Financeira</h4>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
                        <span>04</span>
                        <h4>Assessoria Juridica</h4>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
                        <span>05</span>
                        <h4>Intermediações Juridicas</h4>
                        <p>Avulso ou Contrato</p>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="500">
                        <span>06</span>
                        <h4>Representação</h4>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About Lists Section -->

        <!-- ======= Counts Section ======= -->
        <section class="counts section-bg">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                        <div class="count-box">
                            <i class="icofont-simple-smile" style="color: #20b38e;"></i>
                            <span data-toggle="counter-up">50</span>
                            <p>Clientes Atendidos</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="count-box">
                            <i class="icofont-document-folder" style="color: #c042ff;"></i>
                            <span data-toggle="counter-up">123</span>
                            <p>Atendimentos realizados</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="count-box">
                            <i class="icofont-live-support" style="color: #46d1ff;"></i>
                            <span data-toggle="counter-up">63</span>
                            <p>Contratos realizados</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
                        <div class="count-box">
                            <i class="icofont-users-alt-5" style="color: #ffb459;"></i>
                            <span data-toggle="counter-up">11</span>
                            <p>Advogados Especialistas</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Counts Section -->


        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <h2>Nossa Equipe</h2>
                </div>

                <div class="row container-team">

                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="member">
                            <div class="pic"><img src="{{asset('assets/img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Diego Felix</h4>
                                <span>Diretor Executivo e Advogado</span>
                                <!-- <div class="social">
                                    <a href="https://www.linkedin.com/in/alexandre-ramin-94356750/"><i class="icofont-linkedin"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="member">
                            <div class="pic"><img src="{{asset('assets/img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Diego Felix</h4>
                                <span>Diretor Executivo e Advogado</span>
                                <!-- <div class="social">
                                    <a href="https://www.linkedin.com/in/alexandre-ramin-94356750/"><i class="icofont-linkedin"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="member">
                            <div class="pic"><img src="{{asset('assets/img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Diego Felix</h4>
                                <span>Diretor Executivo e Advogado</span>
                                <!-- <div class="social">
                                    <a href="https://www.linkedin.com/in/alexandre-ramin-94356750/"><i class="icofont-linkedin"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Our Team Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Perguntas Frequentes</h2>
                </div>

                <div class="row  d-flex align-items-stretch">

                    <div class="col-lg-6 faq-item" data-aos="fade-up">
                        <h4>Terei suporte em meu processo?</h4>
                        <p>
                            Sim. Temos especialização técnica para ajudar na maioria dos financiamentos disponíveis no mercado. Entre em contato para verificar a disponibilidade.
                        </p>
                    </div>

                    <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
                        <h4>Como saberei com quem falar?</h4>
                        <p>
                            Nossa equipe especializada estará à sua disposição.
                        </p>
                    </div>

                    <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
                        <h4>Terei garantia?</h4>
                        <p>
                            Sim. Oferecemos 3 meses de garantia pelos nossos serviços.
                        </p>
                    </div>

                    <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
                        <h4>O pagamento é facilitado?</h4>
                        <p>
                            Sim. Entre em contato com nossa equipe comercial.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Fale Conosco</h2>
                </div>

                <div class="row">

                    <div class="col-lg-4 d-flex align-items-center" data-aos="fade-up">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Localização</h3>
                            <p>R. Humberto de Campos, 88</p>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="info-box">
                            <i class="bx bx-envelope"></i>
                            <h3>Email</h3>
                            <p>comercial@ids-solucoes.com.br</p>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="info-box ">
                            <i class="bx bx-phone-call"></i>
                            <h3>Telefone:</h3>
                            <p>+55 11 9999-9999 </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Contact Us Section -->

    </main>
    <!-- End #main -->
@endsection
