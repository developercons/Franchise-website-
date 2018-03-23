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
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href= "{{ asset('css/ionicons.min.css') }}">
    @yield('style')
</head>
<body>
    @include('layout.navbar')
    <div class="fc-main">
        @yield('content')
    </div>
    @include('layout.footer')
    @include('component.request-bar')

    <script>
    var routeAddSession = "{{route('addRequest')}}" , routeRemoveSession = "{{route('removeRequest')}}";
    var requetItems = [];
    var sessionData;
    @if(Session::has("franchiseList"))
    sessionData = '{!!json_encode(Session::get("franchiseList"), JSON_UNESCAPED_SLASHES)!!}';
    @endif
    </script>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/mdb.min.js')}}"></script>
    <script src="{{asset('js/franchise.js')}}"></script>
    @yield('script')
    
</body>
</html>