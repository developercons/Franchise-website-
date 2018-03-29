@extends('layout.app')
 
@section('style')
<link rel="stylesheet" href="{{asset('css/franchise.css')}} ">
<style>
    .fc-request-wrapper{
        display: none !important;
    }
    .lead {
        color: #47525d;
    }
    .list-group-item{
        text-align: center;
        border: none;
        font-size: 20px;
        padding: 0;
        margin: 0;
    }
</style>
@endsection

@section('content')
   @if(Session::has("franchiseList") && count(Session::get('franchiseList')) > 0)
    <div class="container">
            <h4 class="mt-5 text-center">Je souhaite de l'information sur le réseau suivant, gratuitement et sans engagement :            </h4>
            <div class="row mt-2">
               <div class="fc-list-group-request w-100">
               </div>
            </div>
            <div class="row mt-5">
                <form class="form-horizontal col-12 card p-5" role="form" method="POST" action="{{ url('franchise/Demande') }}">
                    {{ csrf_field() }}
                    @if(count($errors) > 0)
                     <span class="error">
                        Veuillez remplir tous les champs
                     </span>
                    @endif
                    <p class="lead small m-0 mb-2">
                    Les franchiseurs, responsables du développement sont attentifs à la qualité de votre candidature : soyez clairs, motivez votre projet et renseignez bien les champs demandés.
                    </p>
                    <div class=" form-group ">
                              <label for="select">Êtes-vous* </label>
                              <select class="form-control" name="ev_select" id="" value="{{old('ev_select')}}">
                                <option disabled selected>Êtes-vous</option>
                                <option value="Dirigeant">Dirigeant</option>
                                <option value="Salarié">Salarié</option>
                              </select>
                            @if ($errors->has('ev_select'))
                                <span class="help-block error">
                                    <strong>{{ $errors->first('ev_select') }}</strong>
                                </span>
                            @endif
                        </div>
                    <div class="md-form form-group mt-5">
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre Nom" value="{{old('nom')}}">
                        <label for="nom">Nom* </label>
                        @if ($errors->has('nom'))
                            <span class="help-block error">
                                <strong>{{ $errors->first('nom') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="md-form form-group mt-5">
                        <input type="text" class="form-control" name="prenom" id="Prenom" placeholder="Votre Prenom" value="{{old('prenom')}}">
                        <label for="Prenom">Prenom* </label>
                        @if ($errors->has('prenom'))
                            <span class="help-block error">
                                <strong>{{ $errors->first('prenom') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="md-form form-group mt-5">
                        <input type="text" class="form-control" name="address" id="Adresse" placeholder="Votre Adresse" value="{{old('address')}}">
                        <label for="Adresse">Adresse* </label>
                        @if ($errors->has('address'))
                            <span class="help-block error">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-4">
                                <div class="md-form form-group mt-5">
                                    <input type="text" class="form-control" name="postal" id="Code Postal" placeholder="Votre Code Postal" value="{{old('postal')}}">
                                    <label for="Code Postal">Code Postal* </label>
                                    @if ($errors->has('postal'))
                                        <span class="help-block error">
                                            <strong>{{ $errors->first('postal') }}</strong>
                                        </span>
                                    @endif  
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="md-form form-group mt-5">
                                    <input type="text" class="form-control" name="ville" id="Ville" placeholder="Votre Ville" value="{{old('ville')}}">
                                    <label for="Ville">Ville* </label>
                                    @if ($errors->has('ville'))
                                        <span class="help-block error">
                                            <strong>{{ $errors->first('ville') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                    </div>
                    <div class="md-form form-group mt-5">
                        <input type="text" class="form-control" id="Téléphone" name="telephone" placeholder="Votre Téléphone" value="{{old('telephone')}}">
                        <label for="Téléphone">Téléphone* </label>
                        @if ($errors->has('telephone'))
                            <span class="help-block error">
                                <strong>{{ $errors->first('telephone') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="md-form form-group mt-5">
                        <input type="email" class="form-control" name="email" id="Email" placeholder="Votre Email" value="{{old('email')}}">
                        <label for="Email">Email* </label>
                        @if ($errors->has('email'))
                            <span class="help-block error">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <p class="lead small mt-1">
                        Ces informations sont importantes car elles vont nous permettre de transmettre, ou non, votre dossier vers le(s) franchiseur(s) en fonction des différents critères imposés par l'enseigne. Soyez précis.
                    </p>
                    <div class="md-form form-group ">
                        <input type="text" class="form-control" name="secteur" id="secteur" placeholder="Secteur géographique souhaité " value="{{old('secteur')}}">
                        <label for="secteur">Secteur* </label>
                        @if ($errors->has('secteur'))
                            <span class="help-block error">
                                <strong>{{ $errors->first('secteur') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class=" form-group ">
                            <label for="select">Apport personnel * </label>
                            <select class="form-control" name="apport_select" id="" value="{{old('apport_select')}}">
                                    <option value="" disabled selected>Apport personnel</option>
                                    <option value="5000">jusqu'a 5 000 €</option>
                                    <option value="10000">jusqu'a 10 000 €</option>
                                    <option value="20000">jusqu'a 20 000 €</option>
                                    <option value="30000">jusqu'a 30 000 €</option>
                                    <option value="50000">jusqu'a 50 000 €</option>
                                    <option value="8000">jusqu'a 80 000 €</option>
                                    <option value="100000">jusqu'a 100 000 €</option>
                                    <option value="150000">jusqu'a 150 000 €</option>
                                    <option value="200000">jusqu'a 200 000 €</option>
                                    <option value="500000">jusqu'a 500 000 €</option>
                            </select>
                          @if ($errors->has('apport_select'))
                              <span class="help-block error">
                                  <strong>{{ $errors->first('apport_select') }}</strong>
                              </span>
                          @endif
                      </div>
                      <div class=" form-group ">
                            <label for="select">Avancées de votre projet * </label>
                            <select class="form-control" name="avance_projet_select" id=""> value="{{old('avance_projet_select')}}"
                              <option disabled selected>Avancées de votre projet </option>
                              <option value="documentation">Recherche de documentation</option>
                              <option value="creation">Projet de création</option>
                            </select>
                          @if ($errors->has('avance_projet_select'))
                              <span class="help-block error">
                                  <strong>{{ $errors->first('avance_projet_select') }}</strong>
                              </span>
                          @endif
                      </div>
                      <div class="md-form">
                            <textarea type="text" id="form7" name="txt_parcours" class="md-textarea form-control" rows="3" value="{{old('txt-parcours')}}"></textarea>
                            <label for="form7">Votre parcours, votre projet* </label>
                            @if ($errors->has('txt-parcours'))
                              <span class="help-block error">
                                  <strong>{{ $errors->first('txt_parcours') }}</strong>
                              </span>
                          @endif
                     </div>
                     <div class="list-franchise-request">
                          
                         @foreach (Session::get("franchiseList") as $franchise)
                           <input type="hidden" value="{{$franchise['id']}} " name="franchiseID[]">
                           <input type="hidden" value="{{$franchise['name']}} " name="franchiseName[]">
                         @endforeach
                     </div>
                    <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">
                                ENVOYER
                            </button>
                    </div>
                    <p class="lead small mt-2   ">
                            Franchise France est le leader de la mise à relation entre les candidats à la franchise et les franchiseurs depuis 10 ans. Nous avons déjà aidé plus de 50.000 candidats à se lancer. Vos coordonnées seront uniquement envoyées aux franchiseurs sélectionnés. Elles ne seront ni divulguées à des tiers, ni vendues.
                    </p>
                </form>
            </div>
    </div>
    @else
       <div class="container my-5">
           <h3 class="text-center">Vous n'avez selectionner aucune franchise</h3>
           <h4 class="text-center">
               <a href="{{route('franchiseIndex')}} ">Cliquer ici</a>
               pour selectionner une franchise
           </h4>
       </div>
    @endif
@endsection