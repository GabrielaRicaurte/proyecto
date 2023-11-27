<header>
    <nav id="menu">
        <ul class="nav">
            <li class="nav-item">
                <a class="{{ $activePage == 'home' ? ' active' : '' }} nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="{{ $activePage == 'nosotros' ? ' active' : '' }} nav-link" href="{{ route('nosotros')}}">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="{{ $activePage == 'servicios' ? ' active' : '' }} nav-link" href="{{ route('servicios')}}">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="{{ $activePage == 'contacto' ? ' active' : '' }} nav-link" href="{{ route('contacto')}}">Contacto</a>
            </li>
            <li class="btnNav">
                <a class="nav-link text-light" href="#">Agencia de Desarrollo</a>
            </li>
        </ul>
    </nav>
    <div class="menu-toggle">
        <i class="fa fa-bars"></i>
    </div>
</header>

