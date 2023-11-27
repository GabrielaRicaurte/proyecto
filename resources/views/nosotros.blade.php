@extends('layouts.app', ['activePage' => 'nosotros'])

@section('content')
    <div class="content">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8 hero-info" style="margin-top: 140px">
                    <h1 class="text-decorated px-5">Nuestro equipo se hará cargo de tu <span>Crecimiento en el Futbol</span></h1>
                    <p class="px-5">Lorem ipsum dolor sit amet consectetur <b>adipisicing elit.</b> Veritatis nulla magnam dolore rerum quaerat
                    nesciunt <b> mollitia reiciendis asperiores,</b> harum temporibus totam, minus quidem <b> obcaecati odio eum</b> animi,
                    nisi sit repudiandae ducimus laboriosam nobis eveniet pariatur. Veniam libero totam quaerat repudiandae
                    nihil quam eveniet, ducimus molestiae? <b> Enim dolor nesciunt dolorem earum?.</b></p>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10 cont-img-hero d-flex justify-content-center">
                    <img class="img-hero" src="{{ asset('material/img/img-heroe.jpg')}}" alt="">
                </div>
            </div>
        </div>

        <div class="container-fluid nst-cont-info mt-5">
            <div class="row p-5">
                <div class="col">
                    <h1 class="my-2 mx-5 text-dark"><b>Beneficios</b> a nuestro clientes</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mt-5 py-3">
                        <h5>
                            <svg aria-hidden="true" data-prefix="far" data-icon="futbol" class="svg-inline--fa fa-futbol fa-w-16 svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                <path class="svg-icon-item" fill="currentColor" d="M483.8 179.4C449.8 74.6 352.6 8 248.1 8c-25.4 0-51.2 3.9-76.7 12.2C41.2 62.5-30.1 202.4 12.2 332.6 46.2 437.4 143.4 504 247.9 504c25.4 0 51.2-3.9 76.7-12.2 130.2-42.3 201.5-182.2 159.2-312.4zm-74.5 193.7-52.2 6.4-43.7-60.9 24.4-75.2 71.1-22.1 38.9 36.4c-.2 30.7-7.4 61.1-21.7 89.2-4.7 9.3-10.7 17.8-16.8 26.2zm0-235.4-10.4 53.1-70.7 22-64.2-46.5V92.5l47.4-26.2c39.2 13 73.4 38 97.9 71.4zM184.9 66.4 232 92.5v73.8l-64.2 46.5-70.6-22-10.1-52.5c24.3-33.4 57.9-58.6 97.8-71.9zM139 379.5 85.9 373c-14.4-20.1-37.3-59.6-37.8-115.3l39-36.4 71.1 22.2 24.3 74.3-43.5 61.7zm48.2 67-22.4-48.1 43.6-61.7H287l44.3 61.7-22.4 48.1c-6.2 1.8-57.6 20.4-121.7 0z"/>
                            </svg> Servicio de Primera</h5>
                        <p class="px-3">Tu proyecto estará acargo de un equipo de <b>profesionales</b> que cuidará cada detalle.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-5 py-3">
                        <h5>
                            <svg aria-hidden="true" data-prefix="far" data-icon="clock" class="svg-inline--fa fa-clock fa-w-16 svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path class="svg-icon-item" fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/>
                            </svg> Disponibilidad 24/7</h5>
                        <p class="px-3">Nuestro equipo estará atento a cualquier requerimiento en el momento que lo necesites.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-5 py-3">
                        <h5>
                            <svg aria-hidden="true" data-prefix="fas" data-icon="brain" class="svg-inline--fa fa-brain fa-w-18 svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path class="svg-icon-item" fill="currentColor" d="M208 0c-29.9 0-54.7 20.5-61.8 48.2-.8 0-1.4-.2-2.2-.2-35.3 0-64 28.7-64 64 0 4.8.6 9.5 1.7 14C52.5 138 32 166.6 32 200c0 12.6 3.2 24.3 8.3 34.9C16.3 248.7 0 274.3 0 304c0 33.3 20.4 61.9 49.4 73.9-.9 4.6-1.4 9.3-1.4 14.1 0 39.8 32.2 72 72 72 4.1 0 8.1-.5 12-1.2 9.6 28.5 36.2 49.2 68 49.2 39.8 0 72-32.2 72-72V64c0-35.3-28.7-64-64-64zm368 304c0-29.7-16.3-55.3-40.3-69.1 5.2-10.6 8.3-22.3 8.3-34.9 0-33.4-20.5-62-49.7-74 1-4.5 1.7-9.2 1.7-14 0-35.3-28.7-64-64-64-.8 0-1.5.2-2.2.2C422.7 20.5 397.9 0 368 0c-35.3 0-64 28.6-64 64v376c0 39.8 32.2 72 72 72 31.8 0 58.4-20.7 68-49.2 3.9.7 7.9 1.2 12 1.2 39.8 0 72-32.2 72-72 0-4.8-.5-9.5-1.4-14.1 29-12 49.4-40.6 49.4-73.9z"/>
                            </svg> Asesoria de Crecimiento</h5>
                        <p class="px-3">Recibiras <b>Tips, consejos y recomendación</b> de un equipo de entusiastas en negocios, marketing y tecnologia.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-5 py-3">
                        <h5>
                            <svg aria-hidden="true" data-prefix="fas" data-icon="life-ring" class="svg-inline--fa fa-life-ring fa-w-16 svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path class="svg-icon-item" fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm173.696 119.559-63.399 63.399c-10.987-18.559-26.67-34.252-45.255-45.255l63.399-63.399a218.396 218.396 0 0 1 45.255 45.255zM256 352c-53.019 0-96-42.981-96-96s42.981-96 96-96 96 42.981 96 96-42.981 96-96 96zM127.559 82.304l63.399 63.399c-18.559 10.987-34.252 26.67-45.255 45.255l-63.399-63.399a218.372 218.372 0 0 1 45.255-45.255zM82.304 384.441l63.399-63.399c10.987 18.559 26.67 34.252 45.255 45.255l-63.399 63.399a218.396 218.396 0 0 1-45.255-45.255zm302.137 45.255-63.399-63.399c18.559-10.987 34.252-26.67 45.255-45.255l63.399 63.399a218.403 218.403 0 0 1-45.255 45.255z"/>
                            </svg> Cuidamos tu Experiencia</h5>
                        <p class="px-3">Cuidamos cada detalle, por eso contamos con persona amables, atentas y respetuosas. ¡Sentiras que somos parte de equipo!</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-5 py-3">
                        <h5>
                            <svg aria-hidden="true" data-prefix="fas" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16 svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path class="svg-icon-item" fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"/>
                            </svg> Empatía al 100%</h5>
                        <p class="px-3">Buscamos entender cada arista de tu problema, <b>escucharemos con atención</b> cada palabra y haremos todo lo posible por ponernos en tus zapatos.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-5 py-3">
                        <h5>
                            <svg aria-hidden="true" data-prefix="fas" data-icon="cogs" class="svg-inline--fa fa-cogs fa-w-20 svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path class="svg-icon-item" fill="currentColor" d="m512.1 191-8.2 14.3c-3 5.3-9.4 7.5-15.1 5.4-11.8-4.4-22.6-10.7-32.1-18.6-4.6-3.8-5.8-10.5-2.8-15.7l8.2-14.3c-6.9-8-12.3-17.3-15.9-27.4h-16.5c-6 0-11.2-4.3-12.2-10.3-2-12-2.1-24.6 0-37.1 1-6 6.2-10.4 12.2-10.4h16.5c3.6-10.1 9-19.4 15.9-27.4l-8.2-14.3c-3-5.2-1.9-11.9 2.8-15.7 9.5-7.9 20.4-14.2 32.1-18.6 5.7-2.1 12.1.1 15.1 5.4l8.2 14.3c10.5-1.9 21.2-1.9 31.7 0L552 6.3c3-5.3 9.4-7.5 15.1-5.4 11.8 4.4 22.6 10.7 32.1 18.6 4.6 3.8 5.8 10.5 2.8 15.7l-8.2 14.3c6.9 8 12.3 17.3 15.9 27.4h16.5c6 0 11.2 4.3 12.2 10.3 2 12 2.1 24.6 0 37.1-1 6-6.2 10.4-12.2 10.4h-16.5c-3.6 10.1-9 19.4-15.9 27.4l8.2 14.3c3 5.2 1.9 11.9-2.8 15.7-9.5 7.9-20.4 14.2-32.1 18.6-5.7 2.1-12.1-.1-15.1-5.4l-8.2-14.3c-10.4 1.9-21.2 1.9-31.7 0zm-10.5-58.8c38.5 29.6 82.4-14.3 52.8-52.8-38.5-29.7-82.4 14.3-52.8 52.8zM386.3 286.1l33.7 16.8c10.1 5.8 14.5 18.1 10.5 29.1-8.9 24.2-26.4 46.4-42.6 65.8-7.4 8.9-20.2 11.1-30.3 5.3l-29.1-16.8c-16 13.7-34.6 24.6-54.9 31.7v33.6c0 11.6-8.3 21.6-19.7 23.6-24.6 4.2-50.4 4.4-75.9 0-11.5-2-20-11.9-20-23.6V418c-20.3-7.2-38.9-18-54.9-31.7L74 403c-10 5.8-22.9 3.6-30.3-5.3-16.2-19.4-33.3-41.6-42.2-65.7-4-10.9.4-23.2 10.5-29.1l33.3-16.8c-3.9-20.9-3.9-42.4 0-63.4L12 205.8c-10.1-5.8-14.6-18.1-10.5-29 8.9-24.2 26-46.4 42.2-65.8 7.4-8.9 20.2-11.1 30.3-5.3l29.1 16.8c16-13.7 34.6-24.6 54.9-31.7V57.1c0-11.5 8.2-21.5 19.6-23.5 24.6-4.2 50.5-4.4 76-.1 11.5 2 20 11.9 20 23.6v33.6c20.3 7.2 38.9 18 54.9 31.7l29.1-16.8c10-5.8 22.9-3.6 30.3 5.3 16.2 19.4 33.2 41.6 42.1 65.8 4 10.9.1 23.2-10 29.1l-33.7 16.8c3.9 21 3.9 42.5 0 63.5zm-117.6 21.1c59.2-77-28.7-164.9-105.7-105.7-59.2 77 28.7 164.9 105.7 105.7zm243.4 182.7-8.2 14.3c-3 5.3-9.4 7.5-15.1 5.4-11.8-4.4-22.6-10.7-32.1-18.6-4.6-3.8-5.8-10.5-2.8-15.7l8.2-14.3c-6.9-8-12.3-17.3-15.9-27.4h-16.5c-6 0-11.2-4.3-12.2-10.3-2-12-2.1-24.6 0-37.1 1-6 6.2-10.4 12.2-10.4h16.5c3.6-10.1 9-19.4 15.9-27.4l-8.2-14.3c-3-5.2-1.9-11.9 2.8-15.7 9.5-7.9 20.4-14.2 32.1-18.6 5.7-2.1 12.1.1 15.1 5.4l8.2 14.3c10.5-1.9 21.2-1.9 31.7 0l8.2-14.3c3-5.3 9.4-7.5 15.1-5.4 11.8 4.4 22.6 10.7 32.1 18.6 4.6 3.8 5.8 10.5 2.8 15.7l-8.2 14.3c6.9 8 12.3 17.3 15.9 27.4h16.5c6 0 11.2 4.3 12.2 10.3 2 12 2.1 24.6 0 37.1-1 6-6.2 10.4-12.2 10.4h-16.5c-3.6 10.1-9 19.4-15.9 27.4l8.2 14.3c3 5.2 1.9 11.9-2.8 15.7-9.5 7.9-20.4 14.2-32.1 18.6-5.7 2.1-12.1-.1-15.1-5.4l-8.2-14.3c-10.4 1.9-21.2 1.9-31.7 0zM501.6 431c38.5 29.6 82.4-14.3 52.8-52.8-38.5-29.6-82.4 14.3-52.8 52.8z"/>
                            </svg> Crece en Comunidad</h5>
                        <p class="px-3">Buscamos mantenerte informado de las mejores estrategias de crecimiento digital por nuestro blog y Redes sociales.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container-fluid contact-box px-5">
            <div class="row justify-content-center">
                <div class="col">
                    <h6>Dejanos tu necesidad, te contactaremos...</h6>
                    <h3>Quieres mejorar.<br>!Escribenos!</h3>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control form-control-minimal mt-5" name="nombre" placeholder="Nombre" id="nombre">
                    </div>
                    <div class="col">
                        <input type="email" class="form-control form-control-minimal mt-5" name="correo" placeholder="Correo" id="correo">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control form-control-minimal mt-5" name="telefono" placeholder="Telefono" id="telefono">
                    </div>
                </div>
            </div>
            <div class="form-row mb-1">
                <div class="col">
                    <textarea class="form-control form-control-minimal mt-5 text-area" name="message" id="message" rows="3" placeholder="Cuentanos de tu proyecto."></textarea>
                </div>
            </div>
            <div class="form-row mt-5">
                <div class="col">
                    <button class="btn btn-primary" id="button_submit">Enviar</button>
                </div>
            </div>
        </div>
    </div>

</div>
<style>
    .form-control {
        border: 0;
        border-bottom: 1px solid black;
        outline:none;
        font-size:18px;
        font-family: 'Nunito Sans', sans-serif;
    }
</style>

@endsection
