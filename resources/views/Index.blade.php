
@extends('layouts.master',['page'=>'home'])
@section('Content')
    <link rel="stylesheet" href="{{ asset('css/IndexStyle.css') }}">
    <!-- Wellcome -->
    <div class="container-fluid text-white Wellcome">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">ENTROPIA FARMA <br><span>S DE RL DE CV</span> </h1>
            </div>
        </div>
    </div>
    <!-- Slogan -->
    <div class="Slogan container-fluid text-white">
        <div class="row">
            <div class="col-12 text-center">
                <span>NUESTRA RAZON DE SER ES TU EXITO EN LOS NEGOCIOS</span>
            </div>
        </div>
    </div>
    <!-- Carrousell -->
    <div class="Carrousell container-fluid">
        <div class="row p-5 ">
            <div class="col-12 text-center">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset ('imgs/IndexImgs/carousell/c_1.jpeg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block text-primary">
                                <h5>¡Bienvenido!</h5>
                                <p class="">Preparate para sumergirte en un mundo de innovación y excelencia en la industria farmacéutica</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset ('imgs/IndexImgs/carousell/c_2.webp')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block text-primary">
                                <h5>Productos</h5>
                                <p class="">Descubre tecnologías innovadoras diseñadas para mejorar la eficiencia en tu laboratorio.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset ('imgs/IndexImgs/carousell/c_3.webp')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block text-primary">
                                <h5>Third slide label</h5>
                                <p class="">Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Products-Reume -->

    <div class="Products-Resume container-fluid">
        <div class="row">
            <div class="line col-xs-1 col-md-3 col-lg-3"></div>
            <div class="Section col-xs-12 col-md-9 col-lg-5">
                <h2>Conoce Nuestros Productos</h2>
                <p>Con el compromiso de hacer de tu éxito nuestro propósito, ofrecemos una amplia gama de productos, desde equipos de vanguardia hasta insumos y refacciones de la más alta calidad.</p>
                <div class="row row-15">
                <div class="col-xl-6 wow fadeInUp" data-wow-delay=".2s">
                  <div class="box-default">
                    <div class="box-default-title text-primary">Equipo Industrial</div>
                    <p class="box-default-description">Descubre tecnologías innovadoras diseñadas para mejorar la eficiencia en tu laboratorio.</p>
                    <span class="box-default-icon novi-icon icon-lg mercury-icon-lightbulb-gears text-primary"></span>
                  </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                  <div class="box-default">
                    <div class="box-default-title text-primary">Insumos Farmaceuticos</div>
                    <p class="box-default-description">Una amplia variedad de productos de alta calidad esenciales para tus procesos diarios.</p>
                    <span class="box-default-icon novi-icon icon-lg mercury-icon-target-2 text-primary"></span>
                  </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay=".4s">
                  <div class="box-default">
                    <div class="box-default-title text-primary">Refacciones</div>
                    <p class="box-default-description">Encuentra piezas confiables para garantizar el rendimiento de tus equipos</p>
                    <span class="box-default-icon novi-icon icon-lg mercury-icon-user text-primary"></span>
                  </div>
                </div>
                <!-- <div class="col-xl-6 wow fadeInUp" data-wow-delay=".5s">
                  <div class="box-default">
                    <div class="box-default-title text-primary">Creative Approach</div>
                    <p class="box-default-description">Every project we work on is based on the creative solutions of any issues.</p>
                    <span class="box-default-icon novi-icon icon-lg mercury-icon-partners text-primary"></span>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="Products-image col-xs-8 col-md-12 col-lg-4 text-center">
                <img src="{{  asset ('imgs/IndexImgs/Image.png')}}" class="image-fluid" alt="imagen">
            </div>
        </div>
    </div>

        <!-- 
        <div class="knowUs">
            <div class="Page-Text">
                <h2>CONOCENOS</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, quae cumque dolore distinctio at autem, iste fuga sunt perspiciatis minima fugiat, dicta rerum praesentium explicabo laboriosam quas error. Deleniti, sequi.</p>
            </div>
            <div class="Ubication">
                <span>Nos encontramos en:</span>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.40660999030217!2d-99.48828211774395!3d19.260360070627865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdf44bc721d299%3A0x57f4d333ea13d772!2sENTROPIA%20FARMA%20S%20DE%20RL%20DE%20CV!5e0!3m2!1ses-419!2smx!4v1703731284666!5m2!1ses-419!2smx" width="636" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div> -->
    @endsection
   





