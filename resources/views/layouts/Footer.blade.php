    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    </body>
    <style>
footer {
    background-color: #242628;
    text-align: center;
}

footer img {
    width: 200px;
}

.footer-section2 {
    display: flex;
    align-items: center;
    margin-top: 5%;
    justify-content: center;
}

footer ul {
    text-align: left;
    list-style-type: none;
    margin-top: 2%;
}

footer li a {
    color: #fff;
    text-decoration: none;

}

footer .QuickAccess li {
    margin-bottom: 10px;
}

footer a:hover {
    color: color: #3b7caf;
}
    </style>

    <footer class="container-fluid">
        <div class="row p-5 text-white">
            <div class="col-xs-12 col-md-6 col-lg-3">
                <img src="{{asset ('imgs/favico2.webp')}}" alt="Logo">
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="h5">ENTROPIA FARMA <br>S de RL de CV</p> <br>
                <p>Comprometidos con la excelencia y la satisfacción del cliente, ofrecemos soluciones integrales para
                    impulsar el éxito en la industria farmacéutica.</p>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3 QuickAccess">
                <p class="h5">Acceso Rapido</p> <br>
                <ul>
                    <li><a href="{{asset ('home')}}"><i class="fa-solid fa-house"></i> Inicio</a></li>
                    <li><a href="{{asset ('about')}}"><i class="fa-solid fa-user"></i> Nosotros</a></li>
                    <li><a href="{{asset ('products')}}"><i class="fa-solid fa-flask"></i> Productos</a></li>
                    <li><a href="{{asset ('services')}}"><i class="fa-solid fa-handshake"></i> Servicios</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="h5">Contacto</p><br>
                <p>Contáctanos y descubre cómo podemos contribuir al crecimiento de tu empresa. ¡Gracias por confiar en
                    nosotros!</p>
                <div class="Social-Media">
                    <ul>
                        <li><i class="fa-solid fa-phone"></i>&nbsp<a href="sms:+52 55 6252 0134">+52 55 6252 0134</a>
                        </li><br>
                        <li><i class="fa-solid fa-envelope"></i>&nbsp<a
                                href="mailto:info@entropiafarma.com">info@entropiafarma.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-section2">
                <p>© 2023 All Rights Reserved. Design by Entropia Farma</p>
            </div>
        </div>

    </footer>

    </html>