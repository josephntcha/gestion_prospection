@extends('layout.master')
@section('content')
    {{-- <style>
        .animation {
            width: 100%;
            height: 100vh;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        span {
            color: #222;
            display: inline;
            text-decoration: underline;
            text-transform: uppercase;
            letter-spacing: 4px;
            font-size: 22px;
            transform: rotate(360deg);
            animation: animate 4s linear infinite;
        }

        @keyframes animate {
            0% {
                transform: rotateY(180deg) scale(0);
            }

            50% {
                transform: rotateX(0deg) scale(1);
            }

            100% {
                transform: rotate(0deg) scale(0);
            }
        }
    </style>
    <div class="animation">
        <span>P</span>
        <span>R</span>
        <span>O</span>
        <span>S</span>
        <span>P</span>
        <span>E</span>
        <span>C</span>
        <span>T</span>
        <span>I</span>
        <span>O</span>
        <span>N</span>
    </div> --}}
    <div class="section-start d-flex justify-content-center align-items-center" id="accueil">
        <div class="section-start-content">
            <div class="p-0 col d-flex flex-column justify-content-center  section-start-text-content">
                <h2 class="fw-bold h2-logiciel-gestionc ps-2 position-relative">Le logiciel de gestion de prospection
                    commerciale<br> <span>de votre entreprise</span>
                    <img src="{{ asset('asset/images/VectorUnderline.png') }}" alt=""
                        style="position: absolute; bottom:-10px; left:0; width:155px;">
                </h2>
                <p class=" py-2  ps-4 text-vue-globale">
                    Dans une entreprise où la prospection commerciale joue un rôle essentiel
                    dans le développement des activités commerciales,nous avons développé cette solution pour facilité la
                    gestion des prospections commerciales
                </p>



                <div class="button-start">

                </div>
            </div>

            {{-- section carousel --}}
            <div class="col col-md-12 col-lg-6 main-carousel-content  ">
                <div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
                    <div class="carousel-inner carousel-first-section ">
                        <div class="carousel-item active   d-flex justify-content-lg-center align-items-center">
                            <img src="{{ asset('asset/images/img-bbcar7.jpg') }}" class=" img-fluid" alt="photo">
                        </div>



                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
