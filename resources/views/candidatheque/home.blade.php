@extends('candidatheque.layout.app')

@section('content')
    
<div class="fc-candidatheque-content">
    <div class="bg-candidatheque" style="background-image:url('{{asset('img/bg-candidat.jpg')}}')"></div>
        <div class="fc-candidatheque-wrapper " >
                <div class="container p-5 text-white text-center my-5">
                    <h1>REJOIGNEZ LA PLUS GRANDE CANDIDATHÈQUE DÉDIÉE À LA FRANCHISE</h1>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 card card-candidat ">
                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h4 class="card-title">CANDIDATS</h4>
                                    <!--Text-->
                                    <p class="card-text text-white">
                                        <p>Vous avez un projet de création d'entreprise ?</p>
                                        Déposez votre profil et soyez visible auprès de plus de 3 000 franchiseurs.
                                    </p>
                                    <a href="#" class="btn btn-warning">Je dépose mon profil</a>
                                </div>
                            </div>
                            <div class="col-md-6 card card-franchise ">
                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h4 class="card-title">FRANCHISEURS</h4>
                                    <!--Text-->
                                    <p class="card-text text-white">
                                            <p>Vous recrutez ?</p>
                                            Profitez d'un moteur de recherche puissant et accédez en quelques clics à des profils qualifiés de candidats à la franchise.
                                    </p>
                                    <a href="#" class="btn btn-warning">Je consulte les profils </a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    </div>    
@endsection