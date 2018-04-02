<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{setting('site.title')}} </title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <style>
    
        .col-12{
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
           cursor:pointer;
        }
        .col-12.text-center::before {
            content: "";
            width: 100%;
            background: red;
            height: 100%;
            position: absolute;
            background: linear-gradient(to top,#6346F3,#97DCB4);
            opacity: 0.4;
            left: 0;
            z-index: 0;
        }
        h4{
            color:white;
            font-size:30px;
            z-index:1;
        }
        .visitor{
            background-image : url({{url('img/bg.jpg')}});
        }
        .candidat{
            background-image : url({{url('img/candidat.jpg')}});
        }
        .franchiseur{
            background-position: center;
            background-image : url({{url('img/bg-candidat.jpg')}});
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-direction-column">
            <a class=" visitor col-12 text-center " href="{{url('Accueil')}} ">
               <h4>Espace Visiteur</h4>
            </a>
            <a class="col-12 text-center candidat" href="{{url('candidatheque/candidat/login')}} ">
                <h4>Espace Candidat</h4>
            </a>
            <a class="col-12 text-center franchiseur" href="{{url('candidatheque/candidat/login')}} ">
                <h4>Espace franchiseur</h4>
            </a>
        </div>
    </div>
</body>
</html>