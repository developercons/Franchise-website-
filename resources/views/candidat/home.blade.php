@extends('candidatheque.layout.app')

@section('style')
 <link rel="stylesheet" href="{{asset('/css/candidat.css')}} ">
@endsection

@section('content')
<div class="container-fluid my-5">
    <div class="row">
        <div class="fc-title">
                <i class="icon ion-drag mr-1"></i>
                Tableau de bord
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-profile">
                <div class="card-edit">
                    <i class="icon ion-edit"></i>
                </div>
                <div class="card-image">
                   <div class="fc-profile-user" style="background-image:url({{asset('img/11452.jpg')}})"></div>
                </div>
                <div class="card-body">
                    <h3 class="text-center">MAROUANE SOUAH</h3>
                    <div class="fc-personal-info text-center mt-4">
                        <h6>Information Personnel </h6>
                        <p>Marouane</p>
                        <p>06978541</p>
                        <p>Agadir, Morrocco</p>
                    </div>
                    <div class="fc-personal-info text-center mt-4">
                        <h6>Disponibilité</h6>
                        <select class="custom-select">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <h6 class="mt-2">Status</h6>
                        <select class="custom-select">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-warning mt-3">MODIFIER LE PROFILE</button>

                    
                </div>
            </div>
        </div>
        <div class="col-md-4">              
                <div class="card card-blue">
                    <div>
                        <h5 class="text-center">
                            FORCE DE MON PROFIL
                        </h5>
                        <div class="card-body">
                            <div id="circle">
                                    <strong class="value"></strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4 card-blue">
                    <div class="card-edit">
                        <i class="icon ion-edit"></i>
                    </div>
                    <div>
                        <div class="card-body">
                            <h5 class="text-center">
                                  MON PROJET
                            </h5>
                            <p>
                                    Donnez de la visibilité à votre projet pour être contacté directement par les franchiseurs et échangez sur vos motivations
                            </p>
                            <button type="button" class="btn btn-warning mt-3">COMPLERER MON PROJET</button> 
                        </div>
                    </div>
                </div>
         </div>
        <div class="col-md-4">
            <div class="card card-orange">
                    <div class="card-edit">
                        <i class="icon ion-edit"></i>
                    </div>
                    <div>
                        <div class="card-body">
                            <h5 class="text-center">
                                    Messagerie
                            </h5>
                            <p class="text-center">
                                Vous n'avez actuellement aucun message. Complétez votre profil afin d’attirer l'attention des franchiseurs.

                            </p>
                            <button type="button" class="btn btn-warning mt-3">Voir tous les message</button> 
                        </div>
                    </div>
                </div>
                <div class="card mt-4 card-orange">
                    <div class="card-edit">
                        <i class="icon ion-edit"></i>
                    </div>
                    <div>
                        <div class="card-body">                        
                           <div class="fc-skills">
                               <h5 class="text-center">
                                   MES COMPETENCES
                               </h5>
                                <div class="chip  lighten-4 mt-2">
                                        Experience en management
                                        <i class="icon ion-close"></i>
                                </div>
                                <div class="chip  lighten-4">
                                        Expérience en gestion économique et financière
                                        <i class="icon ion-close"></i>
                                </div>
                                <div class="chip  lighten-4">
                                        Compétence d'animation
                                        <i class="icon ion-close"></i>
                                </div>
                                <div class="chip  lighten-4">
                                        Compétences métier ou diplôme
                                        <i class="icon ion-close"></i>
                                </div>
                           </div>
                    
                            <button type="button" class="btn btn-warning mt-3">MODIFIER LES COMPETENCES</button> 
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('js/progressbar.js')}}"></script>
<script>
        $('#circle').circleProgress({
          value: 0.75,
          size: 200,
          fill: {
            gradient: ["#C9D6FF", "#C9D6FF"]
          }
        }).on('circle-animation-progress', function(event, progress, stepValue) {
        $(this).children('.value').text((stepValue * 100).toFixed(0) + '%   ');
        });
      </script>
@endsection