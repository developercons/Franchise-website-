@extends('franchiseur.layout.app')

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
        <div class="col-md-6 card p-5 my-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-heading text-center ">
                        <h2 class="text-montserrat">INSCRIPTION</h2>
                        <p class="lead">Mon compte franchiseur</p>
                    </div>
                </div>
                <div class="panel-body mt-3">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('candidatheque/franchiseur/inscription') }}">
                        {{ csrf_field() }}
                        <div class=" md-form form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                <label for="email">E-Mail Address</label>
                                @if ($errors->has('email'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class=" md-form form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password">
                                <label for="password">Mot de passe</label>
                                @if ($errors->has('password'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class=" md-form form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                                <label for="password_confirmation">Confirmer le mot de passe</label>
                        </div>

                        <div class="md-form form-group text-center">
                                <button type="submit" class="btn btn-primary">
                                        S'enregistrer
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
