


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{asset('css/light-bootstrap-dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        CREATIV TUB
                    </a>
                </div>
                <ul class="nav">
                    @if(Auth::user()->admin)
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/createProductForm">
                                <i class="nc-icon nc-chart-pie-35"></i>
                                <p>Profil & adresa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/createProductForm">
                                <i class="nc-icon nc-chart-pie-35"></i>
                                <p>Istoric comenzi</p>
                            </a>
                        </li>
                    @else
                    <li>
                        <a class="nav-link" href="/admin/orders">
                            <i class="nc-icon nc-notes"></i>
                            <p>Comenzi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/products">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Produse</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/createProductForm">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Adauga Produs</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/createProductForm">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Utilizatori</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/createProductForm">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Abonati</p>
                        </a>
                    </li>
                    @endif 
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse text-right" id="navigation"><br>
                                    {{ Auth::user()->name }} |
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>


                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-body">
                                    <div id="chartPreferences" class="ct-chart ct-perfect-fourth">
                                        @yield('body')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a target="_blank" href="https://www.webtop.ro/">Website realizat de catre webtop.ro</a>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>

</body>
<!--   Core JS Files   -->
<script src="{{asset('js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

<script src="{{asset('js/bootstrap-switch.js')}}" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{asset('js/chartist.min.js')}}" type="text/javascript"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('js/bootstrap-notify.js')}}" type="text/javascript"></script>

<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{asset('js/light-bootstrap-dashboard.js')}}" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->


</html>


