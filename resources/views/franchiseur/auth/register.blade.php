@extends('franchiseur.layout.app')
@section('style')
<link href="{{asset('js/summernote/summernote.css')}} " rel="stylesheet">

<style>


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


label.btn-default {
    padding: 5px 30px;
    background-color: #3877ae!important;
}

.note-editor i{
    font-size:15px;
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
        <div class="col-md-12 card p-5 my-5 main-card">
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
                    <form id="frm-franchiseur" class="form-horizontal" role="form" method="POST"  enctype="multipart/form-data" action="{{ route('validateFranchiseur') }}">
                        {{ csrf_field() }}
                        <div class="franchiseur-info">
                            <div class=" md-form form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input required id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    <label for="name">Nom de franchise</label>
                                     @if ($errors->has('name'))
                                        <span class="help-block error error-name">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class=" md-form form-group{{ $errors->has('owner') ? ' has-error' : '' }}">
                                    <input required id="owner" type="text" class="form-control" name="owner" value="{{ old('owner') }}">
                                    <label for="owner">Propriétaire de la franchise (Nom et Prenom)</label>
                                     @if ($errors->has('owner'))
                                        <span class="help-block error error-owner">
                                            <strong>{{ $errors->first('owner') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class=" md-form form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input required id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    <label for="email">E-Mail Address</label>
                                     @if ($errors->has('email'))
                                        <span class="help-block error error-email">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class=" md-form form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input required id="password" type="password" class="form-control" name="password">
                                    <label for="password">Mot de passe</label>
                                     @if ($errors->has('password'))
                                        <span class="help-block error error-password">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class=" md-form form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <input required id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                                    <label for="password_confirmation">Confirmer le mot de passe</label>
                            </div>
                        </div>
                        <div class="franchise-info mt-5">
                            <!-- <p class="lead small">
                             Entrez les informations de votre franchise ( concept et caractéristique)
                            </p> -->
                             <div class=" md-form form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <input required id="description" type="text" class="form-control" name="description" value="{{ old('description') }}">
                                    <label for="description">Brève description de votre franchise (moins de 200 caractères)</label>
                                     @if ($errors->has('description'))
                                        <span class="help-block error error-description">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class=" md-form form-group{{ $errors->has('apport') ? ' has-error' : '' }}">
                                    <input required id="apport" type="number" class="form-control" name="apport" value="{{ old('apport') }}">
                                    <label for="apport">Apport Personnel ( € )</label>
                                     @if ($errors->has('apport'))
                                        <span class="help-block error error-apport">
                                            <strong>{{ $errors->first('apport') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class=" md-form form-group{{ $errors->has('droit') ? ' has-error' : '' }}">
                                    <input required id="droit" type="number" class="form-control" name="droit" value="{{ old('droit') }}">
                                    <label for="droit">Droits d'entrée ( € )</label>
                                     @if ($errors->has('droit'))
                                        <span class="help-block error error-droit">
                                            <strong>{{ $errors->first('droit') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group{{ $errors->has('financement') ? ' has-error' : '' }}">
                                    <label class="lead small">Aide de Financement</label>
                                    <label class="btn btn-default form-check-label">
                                        <input required class="form-check-input" type="radio" name="financement" autocomplete="off" value="1" checked> OUI
                                    </label>
                                    <label class="btn btn-default form-check-label">
                                        <input required class="form-check-input" type="radio" name="financement" autocomplete="off" value="0" > NON
                                    </label>
                                     @if ($errors->has('financement'))
                                        <span class="help-block error error-financement">
                                            <strong>{{ $errors->first('financement') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group{{ $errors->has('formation') ? ' has-error' : '' }}">
                                    <label  class="lead small">Aide de formation</label>
                                    <label class="btn btn-default form-check-label">
                                        <input required class="form-check-input" type="radio" name="formation" autocomplete="off" value="1" checked> OUI
                                    </label>
                                    <label class="btn btn-default form-check-label">
                                        <input required class="form-check-input" type="radio" name="formation" autocomplete="off" value="0"> NON
                                    </label>
                                     @if ($errors->has('formation'))
                                        <span class="help-block error error-formation">
                                            <strong>{{ $errors->first('formation') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class=" md-form form-group{{ $errors->has('investissement') ? ' has-error' : '' }}">
                                    <input required id="investissement" type="number" class="form-control" name="investissement" value="{{ old('investissement') }}">
                                    <label for="investissement">Investissement global ( € )</label>
                                     @if ($errors->has('investissement'))
                                        <span class="help-block error error-investissement">
                                            <strong>{{ $errors->first('investissement') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class=" md-form form-group{{ $errors->has('realisation') ? ' has-error' : '' }}">
                                    <input required id="realisation" type="number" class="form-control" name="realisation" value="{{ old('realisation') }}">
                                    <label for="realisation">Dérnier Réalisation ( € )</label>
                                     @if ($errors->has('realisation'))
                                        <span class="help-block error error-realisation">
                                            <strong>{{ $errors->first('realisation') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class=" md-form form-group{{ $errors->has('redevance_fonctionnement') ? ' has-error' : '' }}">
                                    <input required id="redevance_fonctionnement" type="number" min="0" max="100" class="form-control" name="redevance_fonctionnement" value="{{ old('redevance_fonctionnement') }}">
                                    <label for="redevance_fonctionnement">Redevance fonctionnement ( % )</label>
                                     @if ($errors->has('redevance_fonctionnement'))
                                        <span class="help-block error error-redevance_fonctionnement">
                                            <strong>{{ $errors->first('redevance_fonctionnement') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class=" md-form form-group{{ $errors->has('redevance_publicitaire') ? ' has-error' : '' }}">
                                    <input required id="redevance_publicitaire" min="0" max="100" type="number" class="form-control" name="redevance_publicitaire" value="{{ old('redevance_publicitaire') }}">
                                    <label for="redevance_publicitaire">Redevance Publicitaire  ( % )</label>
                                     @if ($errors->has('redevance_publicitaire'))
                                        <span class="help-block error error-redevance_publicitaire">
                                            <strong>{{ $errors->first('redevance_publicitaire') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class=" md-form form-group{{ $errors->has('Royalties') ? ' has-error' : '' }}">
                                    <input required id="Royalties" type="number" class="form-control" name="Royalties"  value="{{ old('Royalties') }}">
                                    <label for="Royalties">Royalties</label>
                                     @if ($errors->has('Royalties'))
                                        <span class="help-block error error-Royalties">
                                            <strong>{{ $errors->first('Royalties') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class=" form-group{{ $errors->has('contrat') ? ' has-error' : '' }}">
                                    <label for="contrat" class="lead small">Type contrat</label>
                                    <select required name="contrat"  class="form-control">
                                        <option value="partenariat">Partenariat</option>
                                        <option value="cooperative">Coopérative</option>
                                        <option value="FRANCHISE">FRANCHISE</option>
                                    </select>
                                     @if ($errors->has('contrat'))
                                        <span class="help-block error error-contrat">
                                            <strong>{{ $errors->first('contrat') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class=" md-form form-group{{ $errors->has('surface') ? ' has-error' : '' }}">
                                    <input required id="surface" type="number" class="form-control" name="surface" value="{{ old('surface') }}">
                                    <label for="surface">Surface  (m²)</label>
                                     @if ($errors->has('surface'))
                                        <span class="help-block error error-surface">
                                            <strong>{{ $errors->first('surface') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class=" form-group{{ $errors->has('categorie') ? ' has-error' : '' }}">
                                    <label for="categorie" class="lead small">Catégorie</label>
                                    <select required name="categorie"  class="form-control">
                                        @foreach($secteurs as $category)
                                            <optgroup label="{{$category->name}}">
                                                @foreach($category->subcategory()->get() as $subcategory)
                                                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                     @if ($errors->has('categorie'))
                                        <span class="help-block error error-categorie">
                                            <strong>{{ $errors->first('categorie') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group">
                                <label for="image" class="lead small">Image (250 x 250)</label>
                                <input required type="file" name="image" class="form-control">
                                @if ($errors->has('image'))
                                        <span class="help-block error error-image">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                 @endif
                            </div>
                            <label for="" class="mt-2 lead">CONCEPT</label>
                             @if ($errors->has('summernote_concept'))
                              <span class="help-block error error-summernote_concept">
                                            <strong>{{ $errors->first('summernote_concept') }}</strong>
                                 </span>
                             @endif
                            <textarea required class="summernote_concept" name="summernote_concept" cols="30" rows="50"></textarea>
                         
                            <label class="mt-2 lead" >CARACTÈRISTIQUE</label>
                             @if ($errors->has('password'))
                               <span class="help-block error error-summernote_caracteristique">
                                            <strong>{{ $errors->first('summernote_caracteristique') }}</strong>
                                 </span>
                             @endif
                            <textarea required class="summernote_caracteristique" name="summernote_caracteristique" cols="30" rows="50"></textarea>

                            <div class="md-form form-group text-center">
                                    <button type="submit" class="btn btn-primary btn-deposer ">
                                            Déposer votre franchise
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
            $('.summernote_concept').summernote({
                height: 400, 
            });

            $('.summernote_caracteristique').summernote({
                height: 400, 
            });
        });
</script>

@endsection