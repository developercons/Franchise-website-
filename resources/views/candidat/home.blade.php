@extends('candidatheque.layout.app')

@section('style')
 <link rel="stylesheet" href="{{asset('/css/candidat.css')}} ">
 
@endsection

@section('content')
@php
 $candidat = Auth::guard('candidat')->user();
@endphp
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
                   <div class="fc-profile-user" style="background-image:url({{asset('storage/'.$candidat->image)}})"></div>
                </div>
                <div class="card-body">
                    <h3 class="text-center">{{$candidat->nom . ' ' . $candidat->prenom}} </h3>
                    <div class="fc-personal-info text-center mt-4">
                        <h6>{{$candidat->telephone}} </h6>
                        <p>{{$candidat->pays}}</p>
                        <p>{{$candidat->ville}}</p>
                        <p>{{$candidat->ضdresse}}</p>
                        <p>{{$candidat->code_postal}}</p>
                    </div>
                    <div class="fc-personal-info text-center mt-4">
                        <h6>Disponibilité</h6>
                        <select class="custom-select" name="disponnibilite" onchange="modifyInfo('disponnibilite',this.value)">
                            <option selected>Veuillez choisir une Disponibilité</option>
                            <option value="Immediate"  {{ $candidat->disponibilite === "Immediate" ? "selected" : "" }}>Immédiate</option>
                            <option value="Disponible" {{ $candidat->disponibilite === "Disponible" ? "selected" : "" }}>Disponible</option>
                            <option value="Non-Disponible" {{ $candidat->disponibilite === "Non-Disponible" ? "selected" : "" }}>Non Disponible</option>
                        </select>
                        <h6 class="mt-2">Status</h6>
                        <select class="custom-select" name="status" onchange="modifyInfo('status',this.value)">
                            <option selected>Veuillez choisir un statut</option>
                            <option value="active" {{ $candidat->status === "active" ? "selected" : "" }}>Je suis en recherche active</option>
                            <option value="fini"    {{ $candidat->status === "fini" ? "selected" : "" }}>J'ai fini mes recherches</option>
                        </select>
                    </div>
                    <a href="{{route('candidatModifyPage')}}" class="btn btn-warning mt-3">MODIFIER LE PROFILE</a>

                    
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
                            <a  href="{{route('candidatProjectPage')}} " class="btn btn-warning mt-3">COMPLERER MON PROJET</a> 
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



        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>

        <div class="loading">
            <svg width="200px"  height="200px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-rolling" style="background: none;"><circle cx="50" cy="50" fill="none" ng-attr-stroke="}" ng-attr-stroke-width="}" ng-attr-r="}}" ng-attr-stroke-dasharray="ray}}" stroke="#5995cb" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(66 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg>
            <p>chargement en cours...</p>
        </div>
        
        <div class="fc-success-dialog">
            <p>
                votre modification a été enregistrée
            </p>
        </div>
        <div class="fc-error-dialog">
            <p>
                un erreur est survenue
            </p>
        </div>
        <!-- Laoding Modal  -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
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
            gradient: ["#3877af", "#3877af"]
          }
        }).on('circle-animation-progress', function(event, progress, stepValue) {
        $(this).children('.value').text((stepValue * 100).toFixed(0) + '%   ');
        });
        var $modifyCandidatURL= "{{route('modifyCandidat')}}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        @if (Session::has('status'))
            $(".fc-success-dialog").slideDown();
            setTimeout(function(){ $(".fc-success-dialog").slideUp(); }, 3500);
        @endif

</script>
<script src="{{asset('js/candidat.js')}}"></script>
@endsection