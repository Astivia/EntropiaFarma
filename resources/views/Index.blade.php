@extends('layouts.master',['page'=>'home'])
@section('Content')
<link rel="stylesheet" href="{{ asset('css/IndexStyle.css') }}">
<!-- Wellcome -->
<div class="container-fluid text-white Wellcome">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">ENTROPIA FARMA <br><span>S DE RL DE CV</span></h1>
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
<section class="Carrousell">
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner col-12">
                        <div class="carousel-item active">
                            <img src="{{ asset ('imgs/IndexImgs/carousell/c_0.webp')}}" class="d-block w-100" alt="..."
                                height=70%>
                            <div class="carousel-caption d-none d-md-block text-primary">
                                <h5>¡Bienvenido!</h5>
                                <p class="">Preparate para sumergirte en un mundo de innovación y excelencia en la
                                    industria farmacéutica</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset ('imgs/IndexImgs/carousell/c_1.webp')}}" class="d-block w-100" alt="..."
                                height=70%>
                            <div class="carousel-caption d-none d-md-block text-primary">
                                <h5>Productos</h5>
                                <p class="">Descubre tecnologías innovadoras diseñadas para mejorar la eficiencia en tu
                                    laboratorio.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset ('imgs/IndexImgs/carousell/c_2.webp')}}" class="d-block w-100" alt="..."
                                height=70%>
                            <div class="carousel-caption d-none d-md-block text-primary">
                                <h5>Servicios</h5>
                                <p class="">No solo nos destacamos por nuestros productos, sino también por nuestros
                                    servicios especializados.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="col-xs-12 col-md-12 linea"></div>
<!-- Products-Reume -->
<section class="Products-Resume">
    <div class="container">
        <div class="row ">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <h2 class="text-center">Nuestros Productos</h2>
                <p>Con el compromiso de hacer de tu éxito nuestro propósito, ofrecemos una amplia gama de productos,
                    desde equipos de vanguardia hasta insumos y refacciones de la más alta calidad.</p>
                <div class="row cards-container">
                    <div class="card">
                        <a href="{{asset('products#Equipment')}}">
                            <div class="card-details">
                                <div class="icon">
                                    <i class="fa-solid fa-industry"></i>
                                </div>
                                <p class="h3">Equipo</p>
                                <p class="text-body">Revoluciona tu laboratorio con Entropia</p>
                            </div>
                            <button class="card-button">Más info</button>
                        </a>
                    </div>
                    <div class="card">
                        <a href="{{asset('products#Supplies')}}">
                            <div class="card-details">
                                <div class="icon">

                                    <i class="fa-solid fa-flask-vial"></i>
                                </div>
                                <p class="h3">Insumos</p>
                                <p class="text-body">Optimiza con calidad en insumos</p>
                            </div>
                            <button class="card-button">Más info</button>
                        </a>
                    </div>
                    <div class="card">
                        <a href="{{asset('products#Refactions')}}">
                            <div class="card-details">
                                <div class="icon">

                                    <i class="fa-solid fa-gear"></i>
                                </div>
                                <p class="h3">Refacciones</p>
                                <p class="text-body">Garantiza eficiencia con nuestras refacciones</p>
                            </div>
                            <button class="card-button">Más info</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services-Reume -->
<section class="Services-Resume">
    <div class="container-fluid">
        <div class="row text-white">
            <div class="Services-image container col-xs-8 col-md-12 col-lg-4 text-center">
                <img src="{{asset ('imgs/IndexImgs/OIG.jpeg')}}" alt="Imagen">
            </div>
            <div class="col-xs-12 col-md-10 col-lg-6 Section">
                <h2 class="text-left">Nuestros Servicios</h2>
                <p>No solo nos destacamos por nuestros productos, sino también por nuestros servicios especializados.Tu
                    éxito es nuestra prioridad. ¡Bienvenido a una experiencia farmacéutica superior en Entropia Farma!
                </p>
                <div class="row row-15">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="box-default">
                            <div class="box-default-title h3">
                                <a href="services">
                                    <i class="fa-solid fa-toolbox"></i>&nbspMantenimiento
                                </a>
                            </div>
                            <p class="box-default-description">Maximiza la durabilidad y rendimiento de tu equipo con
                                nuestro servicio de mantenimiento especializado.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="box-default">
                            <div class="box-default-title h3">
                                <a href="services">
                                    <i class="fa-solid fa-users"></i>&nbspCapacitacion
                                </a>
                            </div>
                            <p class="box-default-description">Desarrolla habilidades clave con nuestra capacitación
                                farmacéutica especializada.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="box-default">
                            <div class="box-default-title h3">
                                <a href="services">
                                    <i class="fa-solid fa-list-check"></i>&nbspAuditorias
                                </a>
                            </div>
                            <p class="box-default-description">Garantiza el cumplimiento normativo con nuestras
                                auditorías internas y a proveedores según NOM-059-SSA1.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="box-default">
                            <div class="box-default-title h3">
                                <a href="services">
                                    <i class="fa-solid fa-industry"></i>&nbspMaquilas
                                </a>
                            </div>
                            <p class="box-default-description">Optimiza tu producción con nuestros servicios de
                                maquilas: etiquetado, emplayado y más.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line col-xs-12 col-md-1 col-lg-2"></div>
        </div>
    </div>
</section>
@endsection