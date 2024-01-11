
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
    <div class="container-fluid text-white Slogan">
        <div class="row">
            <div class="col-12 text-center">
                <span>NUESTRA RAZON DE SER ES TU EXITO EN LOS NEGOCIOS</span>
            </div>
        </div>
    </div>
    <!-- Carrousell -->
    <div class="container-fluid Carrousell">
        <div class="row ">
            <div class="col-12">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner col-12">
                        <div class="carousel-item active">
                            <img src="{{ asset ('imgs/IndexImgs/carousell/c_0.webp')}}" class="d-block w-100" alt="..." height=70%>
                            <div class="carousel-caption d-none d-md-block text-primary">
                                <h5>¡Bienvenido!</h5>
                                <p class="">Preparate para sumergirte en un mundo de innovación y excelencia en la industria farmacéutica</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset ('imgs/IndexImgs/carousell/c_1.webp')}}" class="d-block w-100" alt="..." height=70%>
                            <div class="carousel-caption d-none d-md-block text-primary">
                                <h5>Productos</h5>
                                <p class="">Descubre tecnologías innovadoras diseñadas para mejorar la eficiencia en tu laboratorio.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset ('imgs/IndexImgs/carousell/c_2.webp')}}" class="d-block w-100" alt="..." height=70%>
                            <div class="carousel-caption d-none d-md-block text-primary">
                                <h5>Servicios</h5>
                                <p class="">No solo nos destacamos por nuestros productos, sino también por nuestros servicios especializados.</p>
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
    <div class="container-fluid Products-Resume ">
        <div class="row">
            <div class="line col-xs-12 col-md-2 col-lg-2"></div>
            <div class="Section col-xs-12 col-md-5 col-lg-10">
                <h2>Conoce Nuestros Productos</h2>
                <p>Con el compromiso de hacer de tu éxito nuestro propósito, ofrecemos una amplia gama de productos, desde equipos de vanguardia hasta insumos y refacciones de la más alta calidad.</p>
                <div class="row row-15">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="box-default">
                            <div class="box-default-title h3">
                                <a href="products">
                                    <i class="fa-solid fa-industry"></i>&nbspEquipo Industrial</div>
                                </a>
                                 <p class="box-default-description">Descubre tecnologías innovadoras diseñadas para mejorar la eficiencia en tu laboratorio.</p>
                            </div>
                        </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="box-default">
                             <div class="box-default-title h3">
                                <a href="products">
                                    <i class="fa-solid fa-flask-vial"></i>&nbspInsumos</div>
                                </a>
                                <p class="box-default-description">Una amplia variedad de productos de alta calidad esenciales para tus procesos diarios.</p>
                    
                            </div>
                        </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="box-default">
                            <div class="box-default-title h3">
                                <a href="products">
                                    <i class="fa-solid fa-gear"></i>&nbspRefacciones</div>
                                </a>
                                <p class="box-default-description">Encuentra piezas confiables para garantizar el rendimiento de tus equipos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Products-image col-xs-12 col-md-7 col-lg-4 text-center">
                <img src="{{asset ('imgs/IndexImgs/OIG2.jpeg')}}" class="image-fluid" alt="imagen">
            </div>
        </div>
    </div>
    <!-- Services-Reume -->
    <div class="Products-Resume container-fluid">
        <div class="row text-white">
            <div class="Products-image col-xs-8 col-md-12 col-lg-4 text-center">
                <img src="{{asset ('imgs/IndexImgs/OIG.jpeg')}}" alt="Imagen">
            </div>
            <div class="col-xs-12 col-md-10 col-lg-6 Section">
                <h2>Nuestros Servicios</h2>
                <p>No solo nos destacamos por nuestros productos, sino también por nuestros servicios especializados.Tu éxito es nuestra prioridad. ¡Bienvenido a una experiencia farmacéutica superior en Entropia Farma!</p>
                
            </div>
            <div class="line col-xs-1 col-md-2 col-lg-2"></div>
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
   





