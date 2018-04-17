@extends('franchiseur.layout.app')
@section('style')
<link href="{{asset('js/summernote/summernote.css')}} " rel="stylesheet">

<style>
.error{
    display :none;
}

.loading-wrapper{
    position: absolute;
    z-index: 7;
    background: white;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.loading {
    display:none;
}
.loading-wrapper svg{
    width:60px;
}
.panel-body {
    position:relative;
}

.btn-light , .btn-light.dropdown-toggle {
    background-color: #3877ae !important;
} 
.note-toolbar {
    text-align : center;
}
.note-editor ,  .note-toolbar {
    background: #f6f6f7;
}

.franchise-info{
    display:none;
}
label.btn-default {
    padding: 5px 30px;
    background-color: #3877ae!important;
}

</style>
@endsection
@section('content')
<div class="container">
    <!-- <div class="mt-5 fc-candidat-login text-center">
           <h3 class="text-montserrat text-center">VOUS AVEZ UN PROJET DE CRÉATION D'ENTREPRISE ?</h3>
            <p class="lead text-center">Déposez votre profil et soyez visible auprès de plus de 3 000 franchiseurs.</p>
            <p class="lead text-center">
            La Candidathèque Française de la Franchise est la plus grande plateforme de dépôt de profils d'entrepreneurs et l'outil de sourcing et de recrutement le plus utilisé par les recruteurs, franchiseurs et professionnels de la franchise. 
            La Candidathèque Française de la Franchise vous permet de trouver en un clic votre futur franchiseur. Pour cela, il vous suffit de déposer un dossier de candidature, de sélectionner les secteurs d'activités qui vous intéressent, ainsi que la région ou la zone géographique dans laquelle vous souhaitez vous installer. Les enseignes intéressées par votre profil prendront contact avec vous.
            </p>
    </div> -->
    <div class="row justify-content-center">
        <div class="col-md-6 card p-5 my-5 main-card">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-heading text-center ">
                        <h2 class="text-montserrat">INSCRIPTION</h2>
                        <p class="lead">Mon compte franchiseur</p>
                    </div>
                </div>
                
                <div class="panel-body mt-3">
                     <div class="loading">  
                        <div class="loading-wrapper">
                               <svg width="200px"  height="200px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-rolling" style="background: none;"><circle cx="50" cy="50" fill="none"  stroke="#1d3f72" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(294 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg>
                        </div>                  
                     </div>
                    <form id="frm-franchiseur" class="form-horizontal" role="form" method="POST" action="{{ url('candidatheque/franchiseur/inscription') }}">
                        {{ csrf_field() }}
                        <div class="franchiseur-info">
                            <div class=" md-form form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input id="name" type="text" class="form-control" name="name">
                                    <label for="name">Nom de franchise</label>
                                    <span class="help-block error error-name">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            </div>
                            <div class=" md-form form-group{{ $errors->has('owner') ? ' has-error' : '' }}">
                                    <input id="owner" type="text" class="form-control" name="owner">
                                    <label for="owner">Propriétaire de la franchise (Nom et Prenom)</label>
                                    <span class="help-block error error-owner">
                                        <strong>{{ $errors->first('owner') }}</strong>
                                    </span>
                            </div>
                            <div class=" md-form form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    <label for="email">E-Mail Address</label>
                                    <span class="help-block error error-email">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            </div>
                            <div class=" md-form form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control" name="password">
                                    <label for="password">Mot de passe</label>
                                    <span class="help-block error error-password">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            </div>
                            <div class=" md-form form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                                    <label for="password_confirmation">Confirmer le mot de passe</label>
                            </div>
                            <div class="md-form form-group text-center">
                                    <button type="button" class="btn btn-primary btn-next">
                                            Suivant
                                    </button>
                            </div>
                        </div>
                        <div class="franchise-info mt-5">
                            <p class="lead small">
                             Entrez les informations de votre franchise ( concept et caractéristique)
                            </p>
                             <hr>
                             <div class=" md-form form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <input id="description" type="text" class="form-control" name="description">
                                    <label for="description">Brève description de votre franchise (moins de 200 caractères)</label>
                                    <span class="help-block error error-description">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            </div>
                            <div class=" md-form form-group{{ $errors->has('apport') ? ' has-error' : '' }}">
                                    <input id="apport" type="number" class="form-control" name="apport">
                                    <label for="apport">Apport Personnel ( € )</label>
                                    <span class="help-block error error-apport">
                                        <strong>{{ $errors->first('apport') }}</strong>
                                    </span>
                            </div>
                            <div class=" md-form form-group{{ $errors->has('droit') ? ' has-error' : '' }}">
                                    <input id="droit" type="number" class="form-control" name="droit">
                                    <label for="droit">Droits d'entrée ( € )</label>
                                    <span class="help-block error error-droit">
                                        <strong>{{ $errors->first('droit') }}</strong>
                                    </span>
                            </div>
                            <div class="form-group{{ $errors->has('financement') ? ' has-error' : '' }}">
                                    <label class="lead small">Aide de Financement</label>
                                    <label class="btn btn-default form-check-label">
                                        <input class="form-check-input" type="radio" name="financement" autocomplete="off" value="oui" checked> OUI
                                    </label>
                                    <label class="btn btn-default form-check-label">
                                        <input class="form-check-input" type="radio" name="financement" autocomplete="off" value="non" > NON
                                    </label>
                                    <span class="help-block error error-financement">
                                        <strong>{{ $errors->first('financement') }}</strong>
                                    </span>
                            </div>
                            <div class="form-group{{ $errors->has('formation') ? ' has-error' : '' }}">
                                    <label  class="lead small">Aide de formation</label>
                                    <label class="btn btn-default form-check-label">
                                        <input class="form-check-input" type="radio" name="formation" autocomplete="off" value="oui" checked> OUI
                                    </label>
                                    <label class="btn btn-default form-check-label">
                                        <input class="form-check-input" type="radio" name="financement" autocomplete="off" value="non"> NON
                                    </label>
                                    <span class="help-block error error-formation">
                                        <strong>{{ $errors->first('formation') }}</strong>
                                    </span>
                            </div>
                            <label for="" class="mt-2 lead">CONCEPT</label>
                            <textarea class="summernote-concept" cols="30" rows="50"></textarea>
                         
                            <label class="mt-2 lead" >CARACTÈRISTIQUE</label>
                            <textarea class="summernote-concept" cols="30" rows="50"></textarea>

                            <div class="md-form form-group text-center">
                                    <button type="button" class="btn btn-primary ">
                                            Suivant
                                    </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('script')
 
 <script>
    //Setup CSRF TOKEN
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    $(".btn-next").click(function(e){
        e.preventDefault();
         //remove request from session
        $.ajax({ 
            type: 'POST', 
            url: "{{route('validateFranchiseur',['validate' => 'first'])}}" , 
            data: { 
                name : $("input[name='name']").val(),
                email : $("input[name='email']").val(),
                password : $("input[name='password']").val(),
                password_confirmation : $("input[name='password_confirmation']").val(),
                owner : $("input[name='owner']").val(),
             }, 
             beforeSend : function(){
                $(this).attr("disabled", true);
                $(".loading").show();
                $(".error").html(' ');
             },
            dataType: 'json',
            success: function (data) { 
                $(".loading").hide();
                if(data.success){
                    displayFranchise();
                } else {
                    $.each(data.errors, function(name, value) {
                        $(".error-"+name).html('<strong>'+value+'</strong>');
                        $(".error-"+name).show();
                    }); 
                }     
             }
        });
    })

    function displayFranchise(){
        $(".main-card").removeClass('col-md-6');
        $(".main-card").addClass('col-md-12');
        $(".franchiseur-info").hide();
        $(".franchise-info").fadeIn();
    }
 </script>

<script src="{{asset('js/summernote/summernote.min.js')}} "></script> 
<script>
        $(document).ready(function() {
            $('.summernote-concept').summernote({
                height: 400, 
            });
        });
</script>

@endsection