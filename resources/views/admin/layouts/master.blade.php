<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/src/assets/img/favicon.ico') }}" />
    <link href="{{ asset('admin/layouts/collapsible-menu/css/light/loader.css') }} " rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/layouts/collapsible-menu/css/dark/loader.css') }} " rel="stylesheet" type="text/css" />

    <script src="{{ asset('admin/layouts/collapsible-menu/loader.js') }} "></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('admin/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/layouts/collapsible-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/layouts/collapsible-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('admin/src/plugins/src/apex/apexcharts.css') }} " rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/src/assets/css/light/dashboard/dash_1.css') }} " rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/src/assets/css/dark/dashboard/dash_1.css') }} " rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    {{-- BEGIN DATA TABLE --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/src/plugins/src/table/datatable/datatables.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('adminsrc/plugins/css/light/table/datatable/dt-global_style.css') }}">
    <link href="{{ asset('admin/src/assets/css/light/apps/invoice-list.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/src/plugins/css/dark/table/datatable/dt-global_style.css') }}">
    <link href="{{ asset('admin/src/assets/css/dark/apps/invoice-list.css') }}" rel="stylesheet" type="text/css" />
    {{-- END DATA TABLE --}}

    {{-- BEGIN PROFILE CSS --}}
    <link rel="stylesheet" href="{{ asset('admin/src/plugins/src/filepond/filepond.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('admin/src/plugins/src/filepond/FilePondPluginImagePreview.min.css') }} ">
    <link href="{{ asset('admin/src/plugins/src/notification/snackbar/snackbar.min.css') }} " rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/src/plugins/src/sweetalerts2/sweetalerts2.css') }} ">

    <link href="{{ asset('admin/src/plugins/css/light/filepond/custom-filepond.css') }} " rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/src/assets/css/light/components/tabs.css') }} " rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/src/assets/css/light/elements/alert.css') }} ">

    <link href="{{ asset('admin/src/plugins/css/light/sweetalerts2/custom-sweetalert.css') }} " rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/src/plugins/css/light/notification/snackbar/custom-snackbar.css') }} " rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/src/assets/css/light/forms/switches.css') }} ">

    <link href="{{ asset('admin/src/assets/css/light/components/list-group.css') }} " rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/src/assets/css/dark/components/list-group.css') }} " rel="stylesheet" type="text/css">

    <link href="{{ asset('admin/src/assets/css/light/users/account-setting.css') }} " rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('admin/src/plugins/css/dark/filepond/custom-filepond.css') }} " rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/src/assets/css/dark/components/tabs.css') }} " rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/src/assets/css/dark/elements/alert.css') }} ">

    <link href="{{ asset('admin/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css') }} " rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/src/plugins/css/dark/notification/snackbar/custom-snackbar.css') }} " rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/src/assets/css/dark/forms/switches.css') }} ">
    <link href="{{ asset('admin/src/assets/css/dark/components/list-group.css') }} " rel="stylesheet" type="text/css">

    <link href="{{ asset('admin/src/assets/css/dark/users/account-setting.css') }} " rel="stylesheet" type="text/css" />
    {{-- END PROFILE CSS --}}

</head>

<body class="layout-boxed alt-menu">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl">
        <header class="header navbar navbar-expand-sm expand-header">
            <a href="javascript:void(0);" class="sidebarCollapse">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </a>
            <ul class="navbar-item flex-row ms-lg-auto ms-0">
                <li class="nav-item theme-toggle-item">
                    <a href="javascript:void(0);" class="nav-link theme-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-moon dark-mode">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-sun light-mode">
                            <circle cx="12" cy="12" r="5"></circle>
                            <line x1="12" y1="1" x2="12" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="23"></line>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                            <line x1="1" y1="12" x2="3" y2="12"></line>
                            <line x1="21" y1="12" x2="23" y2="12"></line>
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                        </svg>
                    </a>
                </li>

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-container">
                            <div class="avatar avatar-sm avatar-indicators avatar-online">
                                @if (Auth::user()->image == null)
                                    @if (Auth::user()->gender == 'male')
                                        <img alt="{{ Auth::user()->name }} avatar" src="{{ asset('image/default_user.jpg') }}" class="rounded-circle">
                                    @else
                                        <img alt="{{ Auth::user()->name }} avatar" src="{{ asset('image/female_default.png') }}" class="rounded-circle">
                                    @endif
                                @else
                                    <img alt="{{ Auth::user()->name }} avatar" src="{{ asset('storage/userPhoto/' . Auth::user()->image) }}" class="rounded-circle">
                                @endif
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <div class="emoji me-2">
                                    &#x1F44B;
                                </div>
                                <div class="media-body">
                                    <h5>{{ Auth::user()->name }}</h5>
                                    <p>{{ Auth::user()->position }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="{{ route('admin#userProfilePage') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> <span>Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-dark mb-2 me-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Log Out</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container  sidebar-closed sbar-open" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            <nav id="sidebar">
                <div class="navbar-nav theme-brand flex-row  text-center">
                    <div class="nav-logo">
                        <div class="nav-item theme-logo">
                            <a href="./index.html">
                                <img src="../src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                            </a>
                        </div>
                        <div class="nav-item theme-text">
                            <a href="./index.html" class="nav-link"> MIBS </a>
                        </div>
                    </div>
                    <div class="nav-item sidebar-toggle">
                        <div class="btn-toggle sidebarCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left">
                                <polyline points="11 17 6 12 11 7"></polyline>
                                <polyline points="18 17 13 12 18 7"></polyline>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    @if (Auth::check() && in_array(Auth::user()->role, ['hr', 'tl', 'it']))
                    <li class="menu active">
                        <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Dashboard</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled show" id="dashboard" data-bs-parent="#accordionExample">
                            @if(Auth::check() && Auth::user()->role == 'it')
                                <li>
                                    <a href="{{ route('admin#userListPage') }}"> User Dashboard </a>
                                </li>
                            @endif
                            @if(Auth::check() && in_array(Auth::user()->role, ['hr', 'tl', 'it']))
                                <li>
                                    <a href="{{ route('admin#jobSeekerListPage') }}"> Job Seeker </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin#interviewAppointListPage') }}"> Appoint Interview </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin#selectedApplicantListPage') }}"> Selection Applicant </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin#joiningFormListPage') }}"> Joining Form </a>
                                </li>
                            @endif
                        </ul>
                    </li>
                    @endif

                    @if (Auth::check() && in_array(Auth::user()->role, ['hr', 'admin', 'it']))
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg><span>APPLICATIONS</span></div>
                    </li>
                    @endif

                    @if (Auth::check() && in_array(Auth::user()->role, ['hr', 'it']))
                    <li class="menu">
                        <a href="#id" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                <span>ID Card</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="id" data-bs-parent="#accordionExample">
                            <li>
                                <a href="{{ route('admin#idCardListPage') }}"> List </a>
                            </li>
                            <li>
                                <a href="{{ route('admin#idCardCreatePage') }}"> Add </a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    @if (Auth::check() && in_array(Auth::user()->role, ['admin', 'it']))
                    <li class="menu">
                        <a href="#gatepass" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span>Gate Pass Card</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="gatepass" data-bs-parent="#accordionExample">
                            <li>
                                <a href="{{ route('admin#gatePassListPage') }}"> List </a>
                            </li>
                            <li>
                                <a href="{{ route('admin#gatePassCreatePage') }}"> Add </a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    @if (Auth::check() && in_array(Auth::user()->role, ['hr', 'admin', 'it']))
                    <li class="menu">
                        <a href="#training" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                <span>Training Card</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="training" data-bs-parent="#accordionExample">
                            <li>
                                <a href="{{ route('admin#trainingCardListPage') }}"> List </a>
                            </li>
                            <li>
                                <a href="./app-invoice-add.html"> Add </a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-minus">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg><span>USER</span></div>
                    </li>

                    <li class="menu">
                        <a href="#users" data-bs-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>User</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="users"
                            data-bs-parent="#accordionExample">
                            @if (Auth::check() && Auth::user()->role == 'it')
                                <li>
                                    <a href="{{ route('auth#registerPage') }}"> Create User </a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('admin#userProfilePage') }}"> Account Settings </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        @yield('content')
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('admin/src/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('admin/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }} "></script>
    <script src="{{ asset('admin/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/waves/waves.min.js') }} "></script>
    <script src="{{ asset('admin/layouts/collapsible-menu/app.js') }} "></script>
    <script src="{{ asset('admin/src/assets/js/custom.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/global/vendors.min.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('admin/src/plugins/src/apex/apexcharts.min.js') }} "></script>
    <script src="{{ asset('admin/src/assets/js/dashboard/dash_1.js') }} "></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    {{-- BEGIN PROFILE SCRIPTS --}}
    <script src="{{ asset('admin/src/plugins/src/filepond/filepond.min.js') }} "></script>
    <script src="{{ asset('admin/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js') }} "></script>
    <script src="{{ asset('admin/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js') }} "></script>
    <script src="{{ asset('admin/src/plugins/src/filepond/FilePondPluginImagePreview.min.js') }} "></script>
    <script src="{{ asset('admin/src/plugins/src/filepond/FilePondPluginImageCrop.min.js ') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/filepond/FilePondPluginImageResize.min.js') }} "></script>
    <script src="{{ asset('admin/src/plugins/src/filepond/FilePondPluginImageTransform.min.js') }} "></script>
    <script src="{{ asset('admin/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js') }} "></script>
    <script src="{{ asset('admin/src/plugins/src/notification/snackbar/snackbar.min.js') }} "></script>
    <script src="{{ asset('admin/src/plugins/src/sweetalerts2/sweetalerts2.min.js') }} "></script>
    <script src="{{ asset('admin/src/assets/js/users/account-settings.js') }} "></script>
    <script src="{{ asset('admin/src/assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/filepond/custom-filepond.js') }}"></script>

    {{-- END PROFILE SCRIPTS --}}

    {{-- BEGIN DATA TABLE --}}<script src="{{ asset('admin/src/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('admin/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/src/assets/js/apps/invoice-list.js') }}"></script>
    {{-- END DATA TABLE --}}
    @yield('scriptSection')
</body>

</html>
