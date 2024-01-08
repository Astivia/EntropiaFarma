@extends('layouts.master',['page'=>'about'])

@section('Content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Misión</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor fermentum eros, sit amet
                    vehicula
                    libero convallis vel. Sed scelerisque, dui sit amet fermentum facilisis, dui erat volutpat massa,
                    vitae
                    consectetur lacus orci in lectus.</p>
            </div>
            <div class="col-md-6">
                <h2>Visión</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor fermentum eros, sit amet
                    vehicula
                    libero convallis vel. Sed scelerisque, dui sit amet fermentum facilisis, dui erat volutpat massa,
                    vitae
                    consectetur lacus orci in lectus.</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <h2>Valores</h2>
                <ul>
                    <li>Compromiso con la calidad</li>
                    <li>Innovación constante</li>
                    <li>Ética en todos nuestros procesos</li>
                    <li>Colaboración y trabajo en equipo</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Línea del Tiempo</h2>
                <p>2020 - Fundación de Entropia Farma<br>
                    2022 - Inicio de operaciones en la planta de producción<br>
                    2024 - Expansión de la gama de productos</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <h2>Ventajas Competitivas</h2>
                <ul>
                    <li>Tecnología de punta en la producción</li>
                    <li>Compromiso con la sostenibilidad</li>
                    <li>Equipo altamente calificado</li>
                    <li>Red de distribución eficiente</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Ubicación</h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.40660999030217!2d-99.48828211774395!3d19.260360070627865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdf44bc721d299%3A0x57f4d333ea13d772!5e0!3m2!1ses-419!2smx!4v1703731284666!5m2!1ses-419!2smx"
                    width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <h2>Contacto</h2>
                <p>Dirección: [Dirección de la empresa]<br>
                    Teléfono: [Número de teléfono]<br>
                    Correo Electrónico: [Correo electrónico]</p>
            </div>
            <div class="col-md-6">
                <h2>Redes Sociales</h2>
                <ul>
                    <li><a href="https://www.facebook.com/entropiafarma" target="_blank">Facebook</a></li>
                    <li><a href="https://www.linkedin.com/company/entropiafarma" target="_blank">LinkedIn</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS y Popper.js (si lo necesitas) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-eoVl/Zq8wAOI8r36J7S5l5A8zQhrwjLlnLYt+2z1qIwHE0i7Mz9v3R+L2N6tO9X" crossorigin="anonymous"></script>

@endsection
