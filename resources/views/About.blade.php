@extends('layouts.master',['page'=>'about'])

@section('Content')
<link rel="stylesheet" href="{{ asset('css/IndexStyle.css') }}">
<!-- Title -->
<section class="Title">
    <div class="container-fluid text-white text-center">
        <h1>Nosotros</h1>
    </div>
</section>
<!-- InfoSection -->
<section class="Mision&Vision">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Misión</h2>
                <p>
                    Entropia Farma impulsa la excelencia farmacéutica con productos y servicios excepcionales,
                    satisfaciendo clientes mediante innovación, responsabilidad social y crecimiento constante
                </p>
            </div>
            <div class="col-md-6">
                <h2>Visión</h2>
                <p>
                    En Entropia Farma, lideramos la innovación farmacéutica con soluciones integrales de calidad,
                    excelencia, crecimiento sostenible y bienestar social, siendo referentes de confianza y eficiencia
                    en la industria.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- MoreInfo -->
<section class="MoreInfo">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 info">
                <div class="col-xs-12 col-md-12 Values">
                    <h2>Valores</h2>
                    <ul>
                        <li><span>Calidad:</span>Compromiso con productos y servicios de excelencia.</li>
                        <li><span>Innovación:</span> Adopción continua de tecnologías vanguardistas.</li>
                        <li><span>Integridad:</span>Actuamos con honestidad y transparencia</li>
                        <li><span>Colaboración:</span>Fomentamos el trabajo en equipo.</li>
                    </ul>
                    <br>
                </div>
                <div class="col-xs-12 col-md-12 Competitive">
                    <h2>Ventajas Competitivas</h2>
                    <ul>
                        <li>Tecnología de punta en la producción</li>
                        <li>Compromiso con la sostenibilidad</li>
                        <li>Equipo altamente calificado</li>
                        <li>Red de distribución eficiente</li>
                    </ul>
                </div>
            </div>
            <!-- TimeLine -->
            <div class="col-md-6 TimeLine">
                <h2>Historia</h2>
                <div class="rightbox">
                    <div class="rb-container">
                        <ul class="rb">
                            <li class="rb-item" ng-repeat="itembx">
                                <div class="timestamp">
                                    3rd May 2019
                                </div>
                                <div class="item-title">Fundación de Entriopia Farma.</div>
                            </li>
                            <li class="rb-item" ng-repeat="itembx">
                                <div class="timestamp">
                                    19th May 2020
                                </div>
                                <div class="item-title">Inicio de Operaciones en Planta.</div>
                            </li>
                            <li class="rb-item" ng-repeat="itembx">
                                <div class="timestamp">
                                    17st June 2020
                                </div>
                                <div class="item-title">Expansion de Gamma de Productos</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Certifications -->
<section class="Certifications">
    <div class="container">
        <h2>Certificaciones</h2>
        <div class="row text-white certs text-center">
            <div class="col-xs-9 col-md-8 col-lg-4 cert py-5 mt-3 mb-3">
                <div class="icon p-2 mt-2 mb-3"><i class="fa-solid fa-globe fa-2xl"></i></div>
                <span class="fw-bold mb-1">ISO 9001</span>
                <P class="text-center p-3 mb-4">
                    Norma internacional para sistemas de gestión de calidad empresarial.
                </P>
                <a class="button fw-bold"
                    href="{{asset('docs/Certificado GCB CERT 1923 ENTROPIA FARMA ESCANEADO.pdf')}}">
                    Ver Certificado
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Our team-->
<section class="OurTeam">
    <div class="container">
        <div class="column">
            <div class="container-fluid text-center TeamInfo">
                <h2>Conoce nuestro Equipo</h2>
                <p>
                    Descubre a las personas apasionadas detrás de Entropia Farma,
                    ellos son quienes impulsan nuestro
                    compromiso con la excelencia farmacéutica
                </p>
            </div>

            <div class="row text-white People container-fluid">
                <div class="col-xs-12 col-md-4 col-lg-3 biography text-center mb-3">
                    <div class="personal-img">
                        <img src="" alt="personal-photo">
                    </div>
                    <h3>Lic. Leonides M.S.</h3>
                    <span class="fw-bold">CEO</span>
                    <p clas="mt-3">
                        Placerat duis ultricies lacus sed turpis tincidunt id aliquet.
                        Et pharetra pharetra massa massa ultricies.
                    </p>
                    <hr class="offset-top-40" />
                    <div class="Personal-Media p-2">
                        <a href=""><i class="fa-brands fa-facebook fa-lg"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin fa-lg"></i></a>
                        <a href=""><i class="fa-brands fa-whatsapp fa-lg"></i></a>
                        <a href=""><i class="fa-solid fa-envelope fa-lg"></i></a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4 col-lg-3 biography text-center mb-3">
                    <div class="personal-img">
                        <img src="" alt="personal-photo">
                    </div>
                    <h3>Ing. Isaac T.B.</h3>
                    <span class="fw-bold mb-5">Posicion</span>
                    <p clas="mt-3">
                        Placerat duis ultricies lacus sed turpis tincidunt id aliquet. Et pharetra pharetra massa massa
                        ultricies.
                    </p>
                    <hr class="offset-top-40" />
                    <div class="Personal-Media p-2">
                        <a href=""><i class="fa-brands fa-facebook fa-lg"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin fa-lg"></i></a>
                        <a href=""><i class="fa-brands fa-whatsapp fa-lg"></i></a>
                        <a href=""><i class="fa-solid fa-envelope fa-lg"></i></a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4 col-lg-3 biography text-center mb-3">
                    <div class="personal-img">
                        <img src="" alt="personal-photo">
                    </div>
                    <h3>NOMBRE</h3>
                    <span class="fw-bold mb-5">Posicion</span>
                    <p clas="mt-3">
                        Placerat duis ultricies lacus sed turpis tincidunt id aliquet. Et pharetra pharetra massa massa
                        ultricies.
                    </p>
                    <hr class="offset-top-40" />
                    <div class="Personal-Media p-2">
                        <a href=""><i class="fa-brands fa-facebook fa-lg"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin fa-lg"></i></a>
                        <a href=""><i class="fa-brands fa-whatsapp fa-lg"></i></a>
                        <a href=""><i class="fa-solid fa-envelope fa-lg"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Location -->
<section class="location">
    <div class="container ">
        <div class="row text-center">
            <h2>Visitanos</h2>
            <p class="mb-4">Explora nuestra planta y descubre el corazón de Entropia Farma. Bienvenido a un viaje visual
                por
                nuestras instalaciones. ¡Conoce cómo creamos excelencia farmacéutica!</p>
            <div class="container-fluid col-12 map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d941.
                    6269279115322!2d-99.48887617145155!3d19.26027509886925!2m3!1f0!2f0!3f0!3m2!
                    1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdf44bc721d299%3A0x57f4d333ea13d772!2s
                    ENTROPIA%20FARMA%20S%20DE%20RL%20DE%20CV!5e0!3m2!1ses-419!2smx!4v17049228031
                    17!5m2!1ses-419!2smx" width="100%" height="300px" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="col-12 p-3 schedules">
                <ul class="text-center">
                    <li><i class="fa-solid fa-clock"></i> Lun-Vie de 6:00 hrs a 18:00 hrs</li>
                    <li><i class="fa-solid fa-clock"></i> Sabado de 6:00 hrs a 14:00 hrs</li>
                    <li><i class="fa-solid fa-clock"></i> Domingo Cerrado</li>
                </ul>
            </div>

        </div>
</section>
<!-- Contact Us-->
<section class="ContactUs">
    <div class="container">
        <p><span>¡Contáctanos!</span> Si no puedes visitar nuestras instalaciones,
            estamos disponibles para responder tus preguntas y discutir
            cómo podemos colaborar para alcanzar tus objetivos farmacéuticos.
            ¡Esperamos escucharte pronto!</p>
        <div class="container ContactInfo ">
            <div class="row ">
                <div class="col-xs-12 col-md-6 Contact text-justify">
                    <h2>Contacto</h2>
                    <ul>
                        <li>
                            <i class="fa-solid fa-location-arrow fa-lg"></i>
                            Atlisco de Las Flores 22, San Pedro
                            Cholula, Ocoyoacac, Méx.
                        </li>
                        <li>
                            <i class="fa-solid fa-phone fa-lg"></i> +52 1 55 6252 0134 o 55 +52 1 55 8577 3288

                        </li>
                        <li>
                            <i class="fa-solid fa-envelope fa-lg"></i>
                            <a href="mailto:info@entropiafarma.com">info@entropiafarma.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6 Social-Media">
                    <h2>Redes Sociales</h2>
                    <div class="links">
                        <a href="https://www.facebook.com/p/Entropia-Farma-100063503445671/" target="_blank">
                            <i class="fa-brands fa-facebook fa-2xl"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/entropiafarma" target="_blank">
                            <i class="fa-brands fa-linkedin fa-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection