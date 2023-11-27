@extends('layouts.app', ['activePage' => 'home'])

@section('content')
    <div class="content">
        {{------------------HEADER------------------}}

        <section>
            <div class="box-header-text">
                <p>Ofrecemos</p>
                <span id="textEffect"></span>
                <a class="btn-header" href="#"><i class="fas fa-arrow-right"></i>Iniciar Cursos</a>
            </div>
            <div class="img-header">
                <div class="img-bg"></div>
            </div>
        </section>

        {{----------------SECTION-ONE----------------}}

        <div class="container box-info-one">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <p><b class="text-left fs-3">El Futbol<br></b>
                    Es el deporte que se practica entre dos equipos de once jugadores que tratan de introducir un balón en la portería del contrario impulsándolo
                    con los pies, la cabeza o cualquier parte del cuerpo excepto las manos y los brazos; en cada equipo hay un portero, que puede tocar el balón
                    con las manos, aunque solamente dentro del área; vence el equipo que logra más goles durante los 90 minutos que dura el encuentro.</p>
                    <a href="#" class="btn">Ver cursos disponilbes</a>
                </div>
                <div class="col-lg-5 col-md-6 box-cont-img" style="margin-top: 100px;">
                    <div class="cont_image p-5">
                        <img class="one-img-body-one" src="{{ asset('material/img/img-body-one.jpg')}}" >
                        <img class="one-img-body-two" src="{{ asset('material/img/img-body-two.jpg')}}" data-aos="fade-up" data-aos-duration="1500">
                        <img class="one-img-body-three" src="{{ asset('material/img/img-body-three.jpg')}}" data-aos="fade-up" data-aos-duration="1500">
                        <img class="one-img-body-four" src="{{ asset('material/img/img-body-four.jpg')}}" data-aos="fade-up" data-aos-duration="1500">
                    </div>
                </div>
            {{-- </div>

            <div class="row"> --}}
                <div class="col-lg-5 col-md-6 box-cont-img" style="margin-top: 50px;">
                    <div class="cont_image p-5 d-flex justify-content-center">
                        <img class="two-img-body-one" src="{{ asset('material/img/img-body-five.jpg')}}" >
                        <img class="two-img-body-two" src="{{ asset('material/img/img-body-six.jpg')}}" id="picture_float1">
                        <img class="two-img-body-three" src="{{ asset('material/img/img-body-seven.jpg')}}" id="picture_float2">
                        <img class="two-img-body-four" src="{{ asset('material/img/img-body-eight.jpg')}}" id="picture_float3">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6">
                    <p><b class="text-left fs-3">Qué es Fútbol:<br></b>
                    El fútbol, también conocido como balompié o soccer (en Estados Unidos), es un deporte que consta de 22 jugadores en el campo,
                    agrupados en dos equipos de 11 integrantes, que se enfrentan con el objetivo de meter un balón en la portería del equipo contrario
                    y anotar un gol.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <p><b class="text-left fs-3">Historia del fútbol:<br></b>
                    es el deporte que se practica entre dos equipos de once jugadores que tratan de introducir un balón en la portería del contrario impulsándolo
                    con los pies, la cabeza o cualquier parte del cuerpo excepto las manos y los brazos; en cada equipo hay un portero, que puede tocar el balón
                    con las manos, aunque solamente dentro del área; vence el equipo que logra más goles durante los 90 minutos que dura el encuentro.</p>
                </div>

                <div class="col-lg-5 col-md-6 box-cont-img" style="margin-top: 70px;">
                    <div class="cont_image p-5 d-flex justify-content-center">
                        <img class="three-img-body-one" src="{{ asset('material/img/img-body-eleven.jpg')}}">
                        <img class="three-img-body-two" src="{{ asset('material/img/img-body-twelve.jpg')}}" data-aos="fade-up" data-aos-duration="1500">
                        <img class="three-img-body-three" src="{{ asset('material/img/img-body-ten.jpg')}}" data-aos="fade-up" data-aos-duration="1500">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 col-md-6 box-cont-img" style="margin-top: 70px;">
                    <div class="cont_image p-5 d-flex justify-content-center">
                        <img class="four-img-body-one" src="{{ asset('material/img/img-body-thirteen.jpg')}}" >
                    </div>
                </div>

                <div class="col-lg-7 col-md-6 mb-5">
                    <p><b class="text-left fs-3">Reglas del juego:<br></b>
                    Las reglas del juego están definidas por la por la FIFA. En la cancha deben estar presentes 22 jugadores, 11 jugadores de cada equipo,
                    y podrán ser cambiados por suplentes o sustitutos con un máximo de tres cambios.</p>
                </div>
            </div>
        </div>

        {{------------------SECTION-TWO------------------}}

        <div class="box-info-two container-fluir my-5">
            <div class="container-fluid">
                <div class="img-info text-center row">
                    <img class="thumbnail parallax-img" src="{{asset('material')}}/img/parallax2.jpg" alt="image">
                    <div class="bg-info-two px-5 py-4">
                        <h1 class="col-8">Portafolio</h1>
                        <h2 class="col-20"><b>Conoce</b> nuestro trabajo.</h2>
                    </div>
                </div>
            </div>
        </div>
        {{------------------SECTION-THREE------------------}}

        <div style="margin-top: 60px">
            <div class="decorated-bottom text-light">
                <svg viewBox="0 0 1000 40"  preserveAspectRatio="none">
                  <path d="">
                    <animate
                      attributeName="d"
                      begin="0s"
                      dur="8s"
                      repeatCount="indefinite"
                      values="
                      M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;
                      M0,40 C200,40 400,0 600,0 C800,0 800,40 1000,40 L1000,50 L0,50 L0,40 Z;
                      M0,30 C200,30 200,0 400,0 C600,0 800,40 1000,40 L1000,50 L0,50 L0,30 Z;
                      M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;"></animate>
                  </path>
                </svg>
            </div>
            <div class="container-fluid">
                <div class="row box-info-three">
                    <div class="col-md-7 cont-box-img">
                        <div class="cont-item-one" data-aos="fade-up">
                            <i class="fas fa-futbol"></i>
                            <h4>ONLINE</h4>
                            <p>Junto a ti vamos a crear la cara online de tu negocios, vamos a hacer crecer el entorno digital de tu empresa.</p>
                        </div>
                        <div class="cont-item-two bg-light text-dark" data-aos="fade-up">
                            <i class="fas fa-globe" style="color: #31003d"></i>
                            <h4>XPERIENCE</h4>
                            <p>Nos caracteriza el cuidar la experiencia de nuestros clientes en cada etapa de ejecucion de sus proyectos.</p>
                        </div>
                        <div class="cont-item-three" data-aos="fade-up">
                            <i class="fas fa-tachometer-alt"></i>
                            <h4>ADVANCE</h4>
                            <p>Buscamos avanzar con cada reto que se presenta en cada uno de los proyecto.</p>
                        </div>
                        <div class="cont-item-four" data-aos="fade-up">
                            <i class="fas fa-headphones-alt"></i>
                            <h4>SUPPORT</h4>
                            <p>Brindamos un soporte constante a nuestros clientes, ofrecemos la mejor comunicación.⁣</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="cont-text">
                            <h1>Curso de Futbol y otros cursos mas</h1>
                            <a href="#" class="btn btn-outline-light">Quienes somos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="decorated-bottom-two">
                <svg viewBox="0 0 1000 40"  preserveAspectRatio="none">
                  <path d="">
                    <animate
                      attributeName="d"
                      begin="0s"
                      dur="8s"
                      repeatCount="indefinite"
                      values="
                      M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;
                      M0,40 C200,40 400,0 600,0 C800,0 800,40 1000,40 L1000,50 L0,50 L0,40 Z;
                      M0,30 C200,30 200,0 400,0 C600,0 800,40 1000,40 L1000,50 L0,50 L0,30 Z;
                      M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;"></animate>
                  </path>
                </svg>
            </div>
        </div>

        {{------------------SECTION-FOUR------------------}}

        <div class="container-fluid mb-5">
            <div class="box-info-four row">
                <h2 class="col-md-5 four-cont-text-one mb-3">Contruye tu <br> <b>PROYECTO</b> <br>Hoy</h2>
                <div class="col-md-7">
                    <p class="four-cont-text-two mt-3">Nos enfocaremos en tu <span class="p-1">CRECIMIENTO</span> , incrementaremos tus conocimientos y jugabilidad,
                    tendras presencia efectiva en el campo y te guiaremos en todo el proceso.</p>
                    <a href="#" class="four-cont-btn">Solicitar Curso</a>
                </div>
                <hr class="mt-5 w-50 m-auto">
           </div>
        </div>

        {{------------------SECTION-FIVE------------------}}

        <div class="container-fluid box-info-five">
            <div class="five-cont-text">
                <h1>Pasos para <span>COMENZAR...</span></h1>
            </div>
            <div class="owl-carousel nonloop content-carousel owl-theme">
                <div class="cont-carousel">
                    <h3>Paso 1</h3>
                    <p>Escribenos por nuestros medios de.<br><a href="{{ route('contacto') }}">Contacto</a></p>
                </div>
                <div class="cont-carousel">
                    <h3>Paso 2</h3>
                    <p>Coordinamos una reunión presencial o videollamada.</p>
                 </div>
                <div class="cont-carousel">
                    <h3>Paso 3</h3>
                    <p>Escucharemos con atención tus necesidades y requerimientos.</p>
                 </div>
                <div class="cont-carousel">
                    <h3>Paso 4</h3>
                    <p>Te enviamos una propuesta junto con la cotización del proyecto.</p>
                 </div>
                <div class="cont-carousel">
                    <h3>Paso 5</h3>
                    <p>Preparate porque empieza la.<br><a href="#">AVENTURA</a></p>
                 </div>
            </div>
        </div>

    </div>
@endsection
















