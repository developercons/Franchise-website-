<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" href= "{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/candidatheque.css') }}">
    @yield('style')
</head>
<body>
    <nav class="mb-1 navbar navbar-expand-lg lighten-1 p-4">
        <a class="navbar-brand" href="{{url('/') }} ">FRANCHISE FRANCE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-5" aria-controls="navbarSupportedContent-5" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-5">
            @if(Auth::guard('candidat')->check())
                <ul class="navbar-nav ml-auto nav-flex-icons align-items-center">
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{url('candidatheque/franchiseur/')}}"><i class="icon ion-android-options"></i> Tableau de bord</a>
                    </li>
                    <li class="nav-item avatar dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('storage/'.Auth::guard('candidat')->user()->image)}}" width="50px" class="rounded-circle z-depth-0" alt="avatar image">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-5">
                            <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                            <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                            <form action="{{url('candidatheque/candidat/logout')}}" method="POST">
                                  {{ csrf_field() }}
                                   <button type="submit" class="dropdown-item waves-effect waves-light" href="#">Logout</button>
                            </form>
                        </div>
                    </li>
                </ul>
            @else
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item">
                        <a href="{{url('http://localhost:8000/candidatheque/candidat/login')}}" class="nav-link waves-effect waves-light d-flex align-items-center ">
                           <div class="icon-round mr-1">
                            <i class="icon ion-person mr-1"></i>
                           </div>
                            Mon compte Candidat
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light d-flex align-items-center ">
                            <div class="icon-round mr-1">
                             <i class="icon ion-ios-people mr-1"></i>
                            </div>
                            Mon compte Franchiseur
                         </a>
                    </li>
                </ul> 
            @endif
        </div>
    </nav>

     @yield('content')

    @include('layout.footer')
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/mdb.min.js')}}"></script>
    @yield('script')
</body>
</html>