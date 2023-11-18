<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
        <a class="pl-0 ml-0 text-center" href="index.html"> <img src="https://via.placeholder.com/216x62" alt="logo">
        </a>
        <a href="#" class="text-center ms-logo-img-link"> <img src="https://via.placeholder.com/70"
                alt="logo"></a>
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
                <span><i class="fa fa-users"></i>Usuario</span>
            </a>
            <ul id="usuario" class="collapse" aria-labelledby="usuario" data-parent="#side-nav-accordion">
                <li> <a href="{{ route('usuario.index') }}">Usuario</a> </li>
                <li> <a href="p{{ route('rol-permiso.index') }}">Rol y permisos</a> </li>
            </ul>
        </li>
        <!-- /Apps -->
    </ul>
</aside>
