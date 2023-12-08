<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
        <a class="pl-0 ml-0 text-center" href="index.html"> <img src="#" alt="logo">
        </a>
        <a href="#" class="text-center ms-logo-img-link"> <img src="#" alt="logo"></a>
        <h5 class="text-center text-white mt-2">Ali Stiven Lovera</h5>
        <h6 class="text-center text-white mb-3">Admin</h6>

    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false"
                aria-controls="dashboard">
                <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
            </a>
            <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
                <li> <a href="#">Medboard</a> </li>
            </ul>
        </li>
        <!-- /Dashboard -->
        <!-- Doctor -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#usuario" aria-expanded="false"
                aria-controls="usuario">
                <span><i class="far fa-user-circle""></i>Usuario</span>
            </a>
            <ul id="usuario" class="collapse" aria-labelledby="usuario" data-parent="#side-nav-accordion">
                <li> <a href="{{ route('usuario.index') }}">Lista usuarios</a> </li>
                <li> <a href="{{ route('rol-permiso.index') }}">Rol y permisos</a> </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#persona" aria-expanded="false"
                aria-controls="persona">
                <span><i class="far fa-user"></i>Persona</span>
            </a>
            <ul id="persona" class="collapse" aria-labelledby="usuario" data-parent="#side-nav-accordion">
                <li> <a href="{{ route('persona.index') }}">Lista persona</a> </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#cliente" aria-expanded="false"
                aria-controls="cliente">
                <span><i class="fa fa-users"></i>Cliente</span>
            </a>
            <ul id="cliente" class="collapse" aria-labelledby="cliente" data-parent="#side-nav-accordion">
                <li> <a href="{{ route('cliente.index') }}">Lista cliente</a></li>
            </ul>
        </li>
        <!-- /Apps -->
    </ul>
    @foreach (Auth::user()->obtenerMenu() as $modulo)
        <ul>
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard"
                    aria-expanded="false" aria-controls="dashboard">
                    <span><i class="material-icons fs-16">dashboard</i> {{ $modulo->nombre_modulo }} </span>
                </a>
                <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
                    <li> <a href="#">Medboard</a> </li>
                </ul>
            </li>
        </ul>
    @endforeach
</aside>
