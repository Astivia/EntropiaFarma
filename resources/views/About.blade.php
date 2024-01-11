@extends('layouts.master',['page'=>'about'])

@section('Content')
    <div class="Title text-white text-center">
        <h1>Nosotros</h1>
    </div>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d941.6269279115322!2d-99.48887617145155!3d19.26027509886925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdf44bc721d299%3A0x57f4d333ea13d772!2sENTROPIA%20FARMA%20S%20DE%20RL%20DE%20CV!5e0!3m2!1ses-419!2smx!4v1704922803117!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- Our team-->
      <section class="section section-md">
        <div class="container">
          <div class="row row-50 justify-content-center">
            <div class="col-md col-12 text-center">
              <div class="section-name wow fadeInRight" data-wow-delay=".2s">People Behind Our Success</div>
              <h3 class="wow fadeInLeft text-capitalize" data-wow-delay=".3s">Meet Our<span class="text-primary"> Team</span></h3>
              <p class="block-675">Mi proin sed libero enim sed faucibus. Metus dictum at tempor commodo. Viverra justo nec ultrices dui sapien eget mi. Eget felis eget nunc lobortis.</p>
            </div>
          </div>
          <div class="row row-50 justify-content-center">
            <div class="col-xl-4 col-sm-6 col-10 wow fadeInLeft" data-wow-delay=".3s">
              <div class="team-classic-wrap">
                <div class="team-classic-img"><img src="images/team-classic-1-370x397.jpg" alt="" width="370" height="198"/>
                </div>
                <div class="block-320 text-center">
                  <h4 class="font-weight-bold">William Johnson</h4><span class="d-block">CEO, Founder</span>
                  <p>Placerat duis ultricies lacus sed turpis tincidunt id aliquet. Et pharetra pharetra massa massa ultricies.</p>
                  <hr class="offset-top-40"/>
                  <ul class="justify-content-center social-links offset-top-30">
                    <li><a class="fa fa-linkedin" href="#"></a></li>
                    <li><a class="fa fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-10 wow fadeInUp" data-wow-delay=".3s">
              <div class="team-classic-wrap">
                <div class="team-classic-img"><img src="images/team-classic-2-370x397.jpg" alt="" width="370" height="198"/>
                </div>
                <div class="block-320 text-center">
                  <h4 class="font-weight-bold">Jane McMillan</h4><span class="d-block">Business Advisor</span>
                  <p>Ut morbi tincidunt augue interdum velit. Sed euismod nisi porta lorem nisl rhoncus mattis rhoncus urna sed.</p>
                  <hr class="offset-top-40"/>
                  <ul class="justify-content-center social-links offset-top-30">
                    <li><a class="fa fa-linkedin" href="#"></a></li>
                    <li><a class="fa fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-10 wow fadeInRight" data-wow-delay=".3s">
              <div class="team-classic-wrap">
                <div class="team-classic-img"><img src="images/team-classic-3-370x397.jpg" alt="" width="370" height="198"/>
                </div>
                <div class="block-320 text-center">
                  <h4 class="font-weight-bold">Robert Smith</h4><span class="d-block">Marketing Manager</span>
                  <p>Vitae aliquet nec ullamcorper sit amet risus nullam eget felis. Euismod lacinia at quis risus sed vulputate.</p>
                  <hr class="offset-top-40"/>
                  <ul class="justify-content-center social-links offset-top-30">
                    <li><a class="fa fa-linkedin" href="#"></a></li>
                    <li><a class="fa fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

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
