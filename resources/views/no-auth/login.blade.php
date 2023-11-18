<!DOCTYPE html>
<html lang="es">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Medboard</title>
    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('vendors/iconic-fonts/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/flat-icons/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/cryptocoins/cryptocoins.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="{{ asset('assets/css/jquery-ui.min.css') }}" rel="stylesheet">
    <!-- Medboard styles -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon.ico">
    <style>
        .full-page-container {
            background: url('{{ asset('images/sistema/fondo.jpg') }}') center no-repeat;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            width: 100%;
        }
    </style>
</head>

<body class="ms-body ms-primary-theme ms-logged-out">
    <!-- Preloader -->
    <div id="preloader-wrap">
        <div class="spinner spinner-8">
            <div class="ms-circle1 ms-child"></div>
            <div class="ms-circle2 ms-child"></div>
            <div class="ms-circle3 ms-child"></div>
            <div class="ms-circle4 ms-child"></div>
            <div class="ms-circle5 ms-child"></div>
            <div class="ms-circle6 ms-child"></div>
            <div class="ms-circle7 ms-child"></div>
            <div class="ms-circle8 ms-child"></div>
            <div class="ms-circle9 ms-child"></div>
            <div class="ms-circle10 ms-child"></div>
            <div class="ms-circle11 ms-child"></div>
            <div class="ms-circle12 ms-child"></div>
        </div>
    </div>

    <!-- Overlays -->
    <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
    <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity"
        data-toggle="slideRight"></div>

    <!-- Main Content -->
    <main class="body-content">

        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper ms-auth">

            <div class="ms-auth-container">
                <div class="ms-auth-col" style="width: 700px">
                    <div class="ms-auth-bg">
                        <div class="full-page-container"></div>
                    </div>
                </div>
                <div class="ms-auth-col">
                    <div class="ms-auth-form">
                        <form class="needs-validation" novalidate="">
                            <h1>Iniciar sesión</h1>
                            <p>Por favor ingresa tu usuario y contraseña para continuar</p>
                            <div class="mb-3">
                                <label for="validationCustom08">Usuario</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="validationCustom08"
                                        placeholder="Usuario" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="validationCustom09">Contraseña</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="validationCustom09"
                                        placeholder="Contraseña" required="">
                                    <div class="invalid-feedback">
                                        Please provide a password.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="ms-checkbox-wrap">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span> Recordar contraseña </span>
                                <label class="d-block mt-3"><a href="#" class="btn-link" data-toggle="modal"
                                        data-target="#modal-12">¿Has olvidado tu contraseña?</a></label>
                            </div>
                            <button class="btn btn-primary mt-4 d-block w-100" type="submit">Iniciar session</button>
                            {{-- <span class="d-block text-center my-4">Or</span>
                             <button type="button" class="btn mt-4 d-block w-100 btn-social-login"> <img
                                    src="https://via.placeholder.com/50x49" alt="image"> <span>Login with
                                    Facebook</span> </button>
                            <button type="button" class="btn mt-4 d-block w-100 btn-social-login"> <img
                                    src="https://via.placeholder.com/50x51" alt="image"> <span>Login with
                                    Google</span> </button> --}}
                            <p class="mb-0 mt-3 text-center">¿No tienes una cuenta? <a class="btn-link"
                                    href="default-register.html">Crear una cuenta</a> </p>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- Forgot Password Modal -->
        <div class="modal fade" id="modal-12" tabindex="-1" role="dialog" aria-labelledby="modal-12">
            <div class="modal-dialog modal-dialog-centered modal-min" role="document">
                <div class="modal-content">

                    <div class="modal-body text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <i class="flaticon-secure-shield d-block"></i>
                        <h1>Forgot Password?</h1>
                        <p> Enter your email to recover your password </p>
                        <form method="post">
                            <div class="ms-form-group has-icon">
                                <input type="text" placeholder="Email Address" class="form-control"
                                    name="forgot-password" value="">
                                <i class="material-icons">email</i>
                            </div>
                            <button type="submit" class="btn btn-primary shadow-none">Reset Password</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </main>

    <!-- SCRIPTS -->
    <!-- Global Required Scripts Start -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- Global Required Scripts End -->
    <script>
        var base_url = "{{ url('/') }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <!-- Medboard core JavaScript -->
    <script src="{{ asset('assets/js/framework.js') }}"></script>

    <!-- Settings -->
    <script src="{{ asset('assets/js/settings.js"') }}"></script>

</body>

</html>
