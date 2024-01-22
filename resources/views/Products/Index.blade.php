@extends('layouts.master',['page'=>'products'])

@section('Content')
<link rel="stylesheet" href="{{ asset('css/IndexStyle.css') }}">
<!-- Title -->
<section class="Title">
    <div class="container-fluid text-white text-center">
        <h1>Productos</h1>
    </div>
</section>
<!---Description--->
<section class="Description">
    <div class="container p-2 text-center col-xs-12">
        <h2>¡Bienvenido! </h2>
        <p>Explora nuestra amplia gama de soluciones farmacéuticas que
            abarcan
            Equipos, Insumos y Refacciones. Descubre tecnología innovadora, materiales de calidad y componentes
            esenciales para
            impulsar el éxito de tu laboratorio.</p>
    </div>
</section>

<!---QuickAccess--->
<section class="QuickAccess mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center cards">
                <!-- Carousel (visible solo en pantallas pequeñas) -->
                <div id="quickAccessCarousel" class="carousel slide d-md-none" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="{{ route('products.index', ['type' => 1]) }}" class="card">
                                <i class="fa-solid fa-industry fa-2xl icon"></i>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{ route('products.index', ['type' => 2]) }}" class="card">
                                <i class="fa-solid fa-briefcase-medical fa-2xl icon"></i>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{ route('products.index', ['type' => 3]) }}" class="card">
                                <i class="fa-solid fa-gear fa-2xl icon"></i>
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#quickAccessCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#quickAccessCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- (visible en pantallas medianas y grandes) -->
                <div class="d-none d-md-block container">
                    <div class="row cards">
                        <a href="{{ route('products.index', ['type' => 1]) }}" class="card">
                            <i class="fa-solid fa-industry fa-2xl icon"></i>
                            equipo
                        </a>
                        <a href="{{ route('products.index', ['type' => 2]) }}" class="card">
                            <i class="fa-solid fa-briefcase-medical fa-2xl icon"></i>
                        </a>
                        <a href="{{ route('products.index', ['type' => 3]) }}" class="card">
                            <i class="fa-solid fa-gear fa-2xl icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="triangle"></section> -->
<!---Equipment--->
<section class="Equipment" id="Equipment">
    <div class="container">
        <div class="row text-center">
            <h2><i class="fa-solid fa-industry"></i> Equipos </h2>
            <p class="text-center p-3">¡Sumérgete en nuestro catálogo de Equipos , una colección única que abarca desde
                tecnología
                de punta hasta opciones confiables de segunda mano.La fuente integral para soluciones industriales está
                aquí!
            </p>
            <div class="text-center Equipment-images">
                <img src="{{asset('imgs/Products/img-1.webp')}}" alt="Products-1" class="rounded float-start active">
                <img src="{{asset('imgs/Products/img-2.webp')}}" alt="Products-2" class="rounded float-center">
                <img src="{{asset('imgs/Products/img-3.webp')}}" alt="Products-3" class="rounded float-center">
                <img src="{{asset('imgs/Products/img-4.webp')}}" alt="Products-4" class="rounded float-end">
            </div>
            <div class="text-center mt-5 mb-5 ">
                <a href="{{asset ('products/1')}}" class="Eq_button  rounded col-xs-5 col-lg-3">
                    Explora más ahora!
                </a>
            </div>
        </div>

    </div>
</section>
<!-- <section class="triangle-2"></section> -->
<!---supplies--->
<section class="Supplies" id="Supplies">
    <div class="container">
        <div class="row text-center">
            <h2><i class="fa-solid fa-briefcase-medical"></i> Insumos</h2>
            <p class="text-center p-3"> ¡Explora nuestra variedad de Insumos! Desde materias primas hasta suministros
                esenciales, descubre todo
                lo que necesitas para mantener tu laboratorio en pleno rendimiento. Accede a la excelencia en insumos.
                ¡Descúbrelo ahora!</p>
            <div class="text-center Equipment-images">
                <img src="{{asset('imgs/Products/img-5.webp')}}" alt="Supplies-1" class="rounded float-start active">
                <img src="{{asset('imgs/Products/img-6.webp')}}" alt="Supplies-2" class="rounded float-center">
                <img src="{{asset('imgs/Products/img-7.webp')}}" alt="Supplies-3" class="rounded float-center">
                <img src="{{asset('imgs/Products/img-8.webp')}}" alt="Supplies-4" class="rounded float-end">
            </div>
            <div class="text-center mt-5 mb-5 ">
                <a href="{{asset ('products/2')}}" class="Eq_button  rounded col-xs-5 col-lg-3">
                    Explora más ahora!
                </a>
            </div>

        </div>
    </div>
</section>

<!---Refactions--->
<section class="Refactions" id="Refactions">
    <div class="container">
        <div class="row text-center">
            <h2><i class="fa-solid fa-gear"></i> Refacciones</h2>
            <p class="text-center p-3">¡Explora nuestra variedad de Insumos! Desde materias primas hasta suministros
                esenciales, descubre todo
                lo que necesitas para mantener tu laboratorio en pleno rendimiento. Accede a la excelencia en insumos.
                ¡Descúbrelo ahora!</p>
        </div>
    </div>
</section>


@endsection