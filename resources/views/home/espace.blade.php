<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{setting('site.title')}} </title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style>
    
        .col-md-4{
            display: flex;
            justify-content: center;
            align-items: center;
           cursor:pointer;
           background-size:cover;
           background-position:center;
           cursoir:pointer;
        }
        .col-md-4.text-center::before {
            content: "";
            width: 100%;
            background: red;
            height: 100%;
            position: absolute;
            background: linear-gradient(to top,#2f2d2d,#6e83b3);
            opacity: 0.6;
            left: 0;
            z-index: 0;
            
        }
        h4{
            color:white;
            font-size:30px;
            z-index:1;
            text-transform:uppercase;
            font-family:Montserrat;
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
        .row {
            height:100vh;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <a class=" visitor col-md-4 text-center " href="{{url('Accueil')}} ">
               <h4>Espace Visiteur</h4>
            </a>
            <a class="col-md-4 text-center candidat" href="{{url('candidatheque/candidat/login')}} ">
                <h4>Espace Candidat</h4>
            </a>
            <a class="col-md-4 text-center franchiseur" href="{{url('candidatheque/candidat/login')}} ">
                <h4>Espace franchiseur</h4>
            </a>
        </div>
    </div>
</body>
</html>