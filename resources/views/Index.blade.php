
@extends('layouts.master',['page'=>'home'])
<link rel="stylesheet" href="{{ asset('css/IndexStyle.css') }}">

    @section('Content')
        <div class="Title">
            <h1>ENTROPIA FARMA <br><span>S DE RL DE CV</span></h1>
        </div>
        <div class="Slogan">
            <span>NUESTRA RAZON DE SER ES TU EXITO EN LOS NEGOCIOS</span>
        </div>
        <div class="About-Resume">
            <div class="Carousell">
                <div class="thumbnails"></div>
                <div class="slides">
                    <div><img src="{{ asset ('imgs/IndexImgs/carousell/c_1.jpeg')}}"></div>
                    <div><img src="{{ asset ('imgs/IndexImgs/carousell/c_2.webp')}}"></div>
                    <div><img src="{{ asset ('imgs/IndexImgs/carousell/c_3.webp')}}"></div>
                </div>
            </div>
            <div class="Page-Text">
                <h2>¿QUIENES SOMOS?</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo, atque natus non consequatur similique ea consectetur libero recusandae possimus beatae eos totam debitis et veniam voluptatum fuga eligendi, fugiat ducimus!</p>
                <a href="about"><button>Saber mas</button></a>
            </div>
        </div>
        <div class="knowUs">
            <div class="Page-Text">
                <h2>CONOCENOS</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, quae cumque dolore distinctio at autem, iste fuga sunt perspiciatis minima fugiat, dicta rerum praesentium explicabo laboriosam quas error. Deleniti, sequi.</p>
            </div>
            <div class="Ubication">
                <span>Nos encontramos en:</span>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.40660999030217!2d-99.48828211774395!3d19.260360070627865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdf44bc721d299%3A0x57f4d333ea13d772!2sENTROPIA%20FARMA%20S%20DE%20RL%20DE%20CV!5e0!3m2!1ses-419!2smx!4v1703731284666!5m2!1ses-419!2smx" width="636" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    @endsection
   




