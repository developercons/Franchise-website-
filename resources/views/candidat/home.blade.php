@extends('candidatheque.layout.app')

@section('style')
 <link rel="stylesheet" href="{{asset('/css/candidat.css')}} ">
 @php
 $candidat = Auth::guard('candidat')->user();
@endphp

 @if(!$candidat->is_active)
        <style>
        .card::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: #4f8cc294;
            z-index: 5;
            top: 0;
            left: 0;
            background: #00000091;
            cursor: not-allowed;
        }

        .alert-account.card::after{
        content:"";
        position:relative;
        }
        </style>
@endif
 
@endsection

@section('content')

<div class="container-fluid my-5">
    <div class="row">
        <div class="fc-title">
                <i class="icon ion-drag mr-1"></i>
                Tableau de bord 
        </div>
    </div>
    @if(!$candidat->is_active)
    <div class="row mb-4 justify-content-center">
         <div class="card alert-account">
             Votre compte n'a pas encore été approuvé, une fois que l'administrateur du site a approuvé votre compte, vous pouvez éditer votre profile
         </div>
    </div>
    @endif
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
                           <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                Modifier votre compétences
                            </button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
        

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
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter des compétences</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="lead small">Cliquer sur entrer pour ajouter un nouveaux compétence</p>
                       <div class="md-form form-group mt-5 ">
                            <input type="text" name="competence"  data-role="materialtags"class="form-control" id="competence" placeholder="Compétence">
                            <label for="competence">Compétence</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <span class="error skills-error">Tours les champs doit etre une chaine de caractere </span>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-primary btn-addCompetence">Save changes</button>
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
        var $competenceURL = "{{route('modifyCandidat')}}";

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        @if (Session::has('status'))
            $(".fc-success-dialog").slideDown();
            setTimeout(function(){ $(".fc-success-dialog").slideUp(); }, 3500);
        @endif
        

        $(".btn-addCompetence").click(function(){
            $competence = [];
            $(".materialize-tags .chip").each(function(e){
            //    $competence.push(e.)
            })
        })
</script>
<script src="{{asset('js/materialize-tags.min.js')}}"></script>

<script src="{{asset('js/candidat.js')}}"></script>
@endsection