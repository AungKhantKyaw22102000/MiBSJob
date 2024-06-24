<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="MiBS - Job Application Form">
    <meta name="author" content="Aung Khant Kyaw">
    <title>MiBS | Employee Information Filling Form</title>

    <!-- Favicon -->
    <link href="{{ asset('user/img/favicon.webp') }}" rel="shortcut icon">

    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="{{ asset('user/vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">

    <!-- Custom Font Icons -->
    <link href="{{ asset('user/vendor/icomoon/css/iconfont.min.css') }}" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="{{ asset('user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/dmenu/css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/hamburgers/css/hamburgers.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/mmenu/css/mmenu.min.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('user/css1/style.css') }}" id="cpswitch" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- Preloader End -->

    <!-- Page -->
    <div id="page">
        <!-- Header -->
        <header class="main-header sticky">
            {{-- <a href="#menu" class="btn-mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a> --}}
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div id="logo">
                            <h1><a href="https://mibs.com.mm" title="MiBS">MiBS</a></h1>
                        </div>
                    </div>
                    <div class="col-lg-9 col-6">
                        <ul id="menuIcons">
                            <li>
                                <form action="">
                                    @csrf
                                    <button class="btn btn-danger">
                                        Logout
                                    </button>
                                </form>
                            </li>

                        </ul>
                        <!-- Menu -->
                        <nav id="menu" class="main-menu">
                            <ul>
                            </ul>
                        </nav>
                        <!-- Menu End -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Sub Header -->
        <div class="sub-header">
            <div class="container">
                <h1>MASCON INTERNATIONAL BUSINESS SERVICES CO., LTD</h1>
                <!-- <h1>Joining Form/Declatration Form</h1> -->
            </div>
        </div>
        <!-- Sub Header End -->

        @yield('content')

        <!-- Footer -->
        <footer class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                    </div>
                    <div class="col-md-4">
                        <div id="copy">© 2023 Madlab</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->
    </div>
    <!-- Page End -->

    <!-- Back to top button -->
    <div id="toTop"><i class="fa fa-chevron-up"></i></div>

    <!-- Vendor Javascript Files -->
    <script src="{{ asset('user/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/vendor/easing/js/easing.min.js') }}"></script>
    <script src="{{ asset('user/vendor/parsley/js/parsley.min.js') }}"></script>
    <script src="{{ asset('user/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('user/vendor/theia-sticky-sidebar/js/ResizeSensor.min.js') }}"></script>
    <script src="{{ asset('user/vendor/theia-sticky-sidebar/js/theia-sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('user/vendor/mmenu/js/mmenu.min.js') }}"></script>

    <!-- Google reCaptcha -->
    <!-- <script src="https://www.google.com/recaptcha/api.js?render=YOUR_KEY"></script> -->

    <!-- Main Javascript File -->
    <script src="{{ asset('user/js/scripts.js') }}"></script>

</body>

</html>
