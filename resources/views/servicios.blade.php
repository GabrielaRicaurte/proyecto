@extends('layouts.app', ['activePage' => 'servicios'])

@section('content')
    <div class="content">

        {{------------------HEADER------------------}}
        <section>
            <div class="box-header-text">
                <p class="header-text">Ofrecemos</p>
                <span id="textEffect"></span>
                <a class="btn-header" href="#"><i class="fas fa-arrow-right"></i>Iniciar Cursos</a>
            </div>
            <div class="img-header">
                <div class="img-bg"></div>
            </div>
        </section>
        {{------------------------------------------}}


        <div class="container-fluid mb-5 mt-5">
            <div class="row svg-cont">
                <div class="col-lg-5 svg-cont-info mt-5">
                    <h2 class="font-weight-bold h3">Desarrollo Digital</h2>
                    <p class="lead">Somos una agencia digital especializada Diseño Web. Construimos plataformas que permiten a nuestros clientes CRECER.</p>
                </div>
                <div class="row px-5">
                    <div class="col-md-3 mt-5 mx-3">
                        <svg aria-hidden="true" data-prefix="far" data-icon="clock" class="svg-inline--fa fa-clock fa-w-16 svg-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path class="svg-item-svg" fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/>
                        </svg>
                        <h4 class="mb-2">Landing Page</h4>
                        <p>Es un sitio web que funciona muy bien para promocionar productos y/o servicio para conseguir interesados.</p>
                    </div>
                    <div class="col-md-3 mt-5 mx-3">
                        <svg aria-hidden="true" data-prefix="fas" data-icon="briefcase" class="svg-inline--fa fa-briefcase fa-w-16 svg-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path class="svg-item-svg" fill="currentColor" d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"/>
                        </svg>
                        <h4 class="mb-2">Web Corporativa</h4>
                        <p>Perfecta para conseguir credibilidad y confianza ante tus clientes y provedores.</p>
                    </div>
                    <div class="col-md-3 mt-5 mx-3">
                        <svg aria-hidden="true" data-prefix="fas" data-icon="folder" class="svg-inline--fa fa-folder fa-w-16 svg-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path class="svg-item-svg" fill="currentColor" d="M464 128H272l-64-64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V176c0-26.51-21.49-48-48-48z"/>
                        </svg>
                        <h4 class="mb-2">Tienda Virtual</h4>
                        <p>Podrás incrementar tu capacidad de venta y sistematizar la gestion de pedidos, inventario, envios y pagos.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center svg-cont-box px-5" style="margin-top: 100px">
                <div class="row svc-cont-info">
                    <div class="col-lg-4 col-md-6 ctext-center py-5 px-3">
                        <img class="svg-img" src="{{ asset('material/img/draw-one.png')}}" alt="">
                        <h4>Servicio de Primera</h4>
                        <p>Te brindaremos un servicio profesional y de calidad, cuidando cada uno de los detalles.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 ctext-center py-5 px-3">
                        <img class="svg-img" src="{{ asset('material/img/draw-two.png')}}" alt="">
                        <h4>Asesoria de Crecimiento</h4>
                        <p>Recibiras Tips, consejos y recomendación de un equipo entusiasta de los negocios, marketing y tecnologia.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 ctext-center py-5 px-3">
                        <img class="svg-img" src="{{ asset('material/img/draw-three.png')}}" alt="">
                        <h4>Empatía al 100%</h4>
                        <p>Buscaremos la manera de entender cada arista de tus necesidades. ¡Escucharemos con atención cada palabra!</p>
                    </div>

                    <div class="col-lg-4 col-md-6 ctext-center py-5 px-3">
                        <img class="svg-img" src="{{ asset('material/img/draw-four.png')}}" alt="">
                        <h4>Disponibilidad 24/7</h4>
                        <p>Nuestro equipo estará atento a cualquier requerimiento en el momento que lo necesites.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 ctext-center py-5 px-3">
                        <img class="svg-img" src="{{ asset('material/img/draw-five.png')}}" alt="">
                        <h4>Cuidamos tu Experiencia</h4>
                        <p>Cuidamos cada detalle, por eso contamos con persona amables, atentas y respetuosas. ¡Sentiras que somos parte de equipo!</p>
                    </div>

                    <div class="col-lg-4 col-md-6 ctext-center py-5 px-3">
                        <img class="svg-img-six" src="{{ asset('material/img/draw-six.png')}}" alt="">
                        <h4>Crece en Comunidad</h4>
                        <p>Buscamos mantenerte informado de las mejores estrategias de crecimiento digital por nuestro blog y Redes sociales.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="margin-top: 100px">
            <div class="row svg-content-whatsapp justify-content-center py-5">
                <div class="col-md-3 d-flex justify-content-center">
                    <svg aria-hidden="true" data-prefix="fas" data-icon="headset" class="svg-inline--fa fa-headset fa-w-16 svg-icon-contac" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path class="svg-item-contac" fill="currentColor" d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z"/>
                    </svg>
                </div>
                <div class="col-md-5 mt-5 text-center">
                    <h3 class="mb-3">Estamos 24/7 por Whatsapp.</h3>
                    <p>No des muchas vueltas, te brindamos una atencion rápida, profesional y precisa por whatsapp. Escribenos y te atenderemos lo más pronto posible. </p>
                </div>
                <div class="col-md-4 text-center p-5 mb-5">
                        <a class="svg-whatsapp" href="#"><i class="fab fa-whatsapp fs-3"></i><br>Hablar por Whatsapp</a>
                </div>
            </div>
        </div>
    </div>
@endsection
