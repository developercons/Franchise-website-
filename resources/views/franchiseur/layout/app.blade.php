<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{setting('site.title')}}</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" href= "{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/candidatheque.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    @yield('style')
    <style>
        nav.navbar .nav-link{
            display: flex !important;
            align-items:center;
        }
        nav.navbar i{
            font-size:25px;
            margin-right:5px;
        }
    </style>
</head>
<body>
    <nav class="mb-1 navbar navbar-expand-lg lighten-1 p-4">
        <a class="navbar-brand" href="{{url('/') }} ">
           <img src="{{voyager::image(setting('site.logo'))}}" width="200px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-5" aria-controls="navbarSupportedContent-5" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-5">
            @if(Auth::guard('franchiseur')->check())
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="{{url('candidatheque/franchiseur/')}}"><i class="icon ion-android-options"></i> Tableau de bord</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{route('franchiseurLogout')}}"><i class="icon ion-log-in"></i> Déconnexion</a>
                </li>
              </ul>
            @else
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{url('http://localhost:8000/candidatheque/candidat/login')}}">
                            <i class="icon ion-person"></i> 
                            Mon compte Candidat
                        </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="{{url('http://localhost:8000/candidatheque/franchiseur/login')}}">
                                <i class="icon ion-ios-people"></i>  Mon compte Franchiseur
                            </a>
                    </li>
                </ul>
                <!-- <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item">
                        <a href="{{url('http://localhost:8000/candidatheque/candidat/login')}}" class="nav-link waves-effect waves-light d-flex align-items-center ">
                           <div class="icon-round mr-1">
                            <i class="icon ion-person mr-1"></i>
                           </div>
                            Mon compte Candidat
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  href="{{url('http://localhost:8000/candidatheque/franchiseur/login')}}" class="nav-link waves-effect waves-light d-flex align-items-center ">
                            <div class="icon-round mr-1">
                             <i class="icon ion-ios-people mr-1"></i>
                            </div>
                            Mon compte Franchiseur
                         </a>
                    </li>
                </ul>  -->
            @endif
        </div>
    </nav>

     @yield('content')

    @include('layout.footer')
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/mdb.min.js')}}"></script>
    @yield('script')
</body>
</html>