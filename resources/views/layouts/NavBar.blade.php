<nav>
    <div class="Navigation-Bar">
        <div class="logo">
            <a href="home"><img src="{{ asset('imgs/favico.png') }}" alt="logo Entropia Farma S de RL de CV"  width="80"></a>
        </div>
        <div class="controls">
            <ul>
                <li><a href="home" class = "{{$page == 'home'? 'active': ''}}">Inicio</a></li>
                <li><a href="about" class="{{$page == 'about'? 'active': ''}}">Nosotros</a></li>
                <li><a href="services" class="{{$page == 'services'? 'active': ''}}">Servicios</a></li>
                <li><a href="products" class="{{$page == 'products'? 'active': ''}}">Productos</a></li>
            </ul>
        </div>
    </div>

</nav>
