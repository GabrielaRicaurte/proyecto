<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=250, initial-scale=1, shrink-to-fit=no">
        {{-- <meta name="viewport" content="width=500, initial-scale=0.9"> --}}
        <link rel="icon" type="image/png" href="{{ asset('material') }}/img/icon.png">
        {{------------------------------STYLE------------------------------}}
        <link rel="stylesheet" href="{{ asset('material')}}/css/style.css">
        <link rel="stylesheet" href="{{ asset('material')}}/css/keyframes.css">
        {{----------------------------FONTS-ICON---------------------------}}
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        {{------------------------------FONTS------------------------------}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@1,200&display=swap" rel="stylesheet">
        {{--------}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
        {{------------------------CSS-ANIMACION-AOS-----------------------}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        {{---------------------------BOOTSTRAP-CSS-------------------------}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        {{-------------------------OWLCAROUSEL-CSS-------------------------}}
        <link rel="stylesheet" href="{{ asset('material/OwlCarousel/dist/assets/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{ asset('material/OwlCarousel/dist/assets/owl.carousel.min.css')}}">
        {{------------------------------TITLE------------------------------}}
        {{-- <title>PROYECTO</title> --}}
        <title>{{ __('Proyecto') }}</title>
    </head>
    <body>

        @include('layouts.navbar')
        <div class="container-fluir">
            @yield('content')
        </div>
        @include('layouts.footer')

        {{-- @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer') --}}

        {{--------------------------------JS--------------------------------}}
        <script src="{{ asset('material/js/jquery-3.6.0.slim.min.js')}}"></script>
        <script src="{{ asset('material/js/script.js')}}"></script>
        <script src="{{ asset('material/js/navBar.js')}}"></script>
        <script src="{{ asset('material/js/svg-effect.js')}}"></script>
        {{-----------------------------ANIME-JS-----------------------------}}
        <script src="{{ asset('material/anime-master/lib/anime.min.js')}}"></script>
        <script src="{{ asset('material/js/animeImg.js')}}"></script>
        {{---------------------------BOOTSTRAP-JS---------------------------}}
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        {{-----------------------------PARALLAX-----------------------------}}
        <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
        {{-------------------------JS-ANIMACION-AOS-------------------------}}
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        {{--------------------------OWLCAROUSEL-JS--------------------------}}
        <script src="{{asset('material/OwlCarousel/dist/owl.carousel.min.js')}}"></script>
        <script>
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                    lazyLoad: true,
                    margin:10,
                    loop:false,
                    responsive:{
                        0:{
                            items:1,
                        },
                        600:{
                            items:2,
                            nav:false
                        },
                        1000:{
                            items:3,
                            loop:false
                        }
                    }
                                })
            });
        </script>
        <script src="{{ asset('material/js/effect.js')}}"></script>
    </body>
</html>
