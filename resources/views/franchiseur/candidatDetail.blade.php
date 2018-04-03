@extends('franchiseur.layout.app')

@section('style')
 <link rel="stylesheet" href="{{asset('/css/candidat.css')}} ">
<style>
    .bg-candidat{
        border-radius:100%;
        height:100px;
        width:100px;
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
        margin:0 auto;
    }
    p {
        margin-bottom:4px;
    }
</style>
@endsection

@section('content')
@php
 $franchiseur = Auth::guard('franchiseur')->user();
@endphp
   <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <div class="bg-candidat" style="background-image:url({{url('storage/'.$candidat->image)}})"></div>
                    <p class="lead">Informations générales</p>
                    <div class="from-group">
                        <span class="lead small">Email</span>
                        <p>{{$candidat->email}}</p>
                    </div>
                    <div class="from-group">
                        <span class="lead small">Nom</span>
                        <p>{{$candidat->nom}}</p>
                    </div>
                    <div class="from-group">
                        <span class="lead small">Prenom</span>
                        <p>{{$candidat->prenom}}</p>
                    </div>
                    <div class="from-group">
                        <span class="lead small">Pays</span>
                        <p>{{$candidat->pays}}</p>
                    </div>
                    <div class="from-group">
                        <span class="lead small">Ville</span>
                        <p>{{$candidat->ville}}</p>
                    </div>
                    <div class="from-group">
                        <span class="lead small">Adresse</span>
                        <p>{{$candidat->Adresse}}</p>
                    </div>
                    <div class="from-group">
                        <span class="lead small">Code postal</span>
                        <p>{{$candidat->code_postal}}</p>
                    </div>
                    <div class="from-group">
                        <span class="lead small">Téléphone</span>
                        <p>{{$candidat->telephone}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card p-4">
                    <p class="lead">Candidat information</p>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="from-group">
                                <span class="lead small">Disponibilité</span>
                                <p>{{($candidat->disponibilite == 'Immediate') ? 'Immédiate' : $candidat->disponibilite }}</p>
                            </div>
                            <div class="from-group">
                                <span class="lead small">Status</span>
                                <p>{{$candidat->status}}</p>
                            </div>
                            <div class="from-group">
                                <span class="lead small">Apport personnel</span>
                                <p>{{$candidat->apport_personnel}} € </p>
                            </div>
                            <div class="from-group">
                                <span class="lead small">Compléments d'apports</span>
                                <p>{{$candidat->complement_apport}} € </p>
                            </div>
                            <div class="from-group">
                                <span class="lead small">Avancées du projet</span>
                                <p>{{$candidat->avance_projet}} </p>
                            </div>
                            <div class="from-group">
                                <span class="lead small">Projet</span>
                                <p>{{$candidat->projet}} </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="from-group">
                                <span class="lead small">CV</span>
                                <p> <a href="{{$candidat->cv}} " target="_blank">CV.PDF</a> </p>
                            </div>
                             <div class="from-group">
                                <span class="lead small">CV</span>
                                <p> <a href="{{$candidat->lettre_motivation}} " target="_blank">Lettre motivation.PDF</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
                                        
@endsection

@section('script')
<script>
      

</script>
<script src="{{asset('js/candidat.js')}}"></script>
@endsection