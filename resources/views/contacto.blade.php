@extends('layouts.app', ['activePage' => 'contacto'])

@section('content')
    <div class="contact">
        <div class="container-fluid" style="padding-top: 120px;">
            <div class="row svg-content-whatsapp justify-content-center py-2 bg-white">
                <div class="col-md-3 d-flex justify-content-center mt-3">
                    <svg aria-hidden="true" data-prefix="fas" data-icon="headset" class="svg-inline--fa fa-headset fa-w-16 svg-icon-contac" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path class="svg-item-contac" fill="currentColor" d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z"/>
                    </svg>
                </div>
                <div class="col-md-5 mt-5 text-center">
                    <h3 class="mb-3">Estamos 24/7 por Whatsapp.</h3>
                    <p>No des muchas vueltas, te brindamos una atencion rápida, profesional y precisa por whatsapp. Escribenos y te atenderemos lo más pronto posible. </p>
                </div>
                <div class="col-md-4 text-center py-5 mb-1 d-flex justify-content-center">
                    <a class="contact-whatsapp w-50 mx-5" href="#"><i class="fab fa-whatsapp fs-3"></i><br>Hablar por Whatsapp</a>
                </div>
            </div>
        </div>

        <div style="margin-top: 80px">
            <div class="contact-decorated-bottom text-light">
                <svg viewBox="0 0 1000 40"  preserveAspectRatio="none">
                  <path d="">
                    <animate
                      attributeName="d"
                      begin="0s"
                      dur="5s"
                      repeatCount="indefinite"
                      values="
                      M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;
                      M0,40 C200,40 400,0 600,0 C800,0 800,40 1000,40 L1000,50 L0,50 L0,40 Z;
                      M0,30 C200,30 200,0 400,0 C600,0 800,40 1000,40 L1000,50 L0,50 L0,30 Z;
                      M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;"></animate>
                  </path>
                </svg>
            </div>
            <div class="container-fluid contact-box contact-two px-5">
                <form method="POST" action="{{ route('contacto') }}">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col">
                            <h6 style="color:#ff6512d4">Dejanos tu necesidad, te contactaremos...</h6>
                            <h3>Quieres mejorar.<br>!Escribenos!</h3>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control form-control-minimal mt-5" name="nombre" placeholder="Nombre" value="{{ old('nombre')}}">
                                {!! $errors->first('nombre', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="col">
                                <input type="email" class="form-control form-control-minimal mt-5" name="correo" placeholder="Correo" value="{{ old('correo')}}">
                                {!! $errors->first('correo', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="col">
                                <input type="text" class="form-control form-control-minimal mt-5" name="telefono" placeholder="Telefono" value="{{ old('telefono')}}">
                                {!! $errors->first('telefono', '<small class="text-danger">:message</small>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-1">
                        <div class="col">
                            <textarea class="form-control form-control-minimal mt-5 text-area" name="mensaje" value="{{ old('mensaje')}}" rows="3" placeholder="Cuentanos de tu proyecto."></textarea>
                            {!! $errors->first('mensaje', '<small class="text-danger">:message</small>') !!}
                        </div>
                    </div>
                    <div class="form-row mt-5">
                        <div class="col">
                            <button class="btn btn-primary" id="button_submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .form-control {
        border: 0;
        background-color: transparent;
        border-bottom: 1px solid black;
        outline:none;
        font-size:18px;
        font-family: 'Nunito Sans', sans-serif;
    }
    </style>
@endsection
