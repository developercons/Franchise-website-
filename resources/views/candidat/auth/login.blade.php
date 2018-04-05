@extends('candidatheque.layout.app')

@section('content')
<div class="container">
    <div class="mt-5 fc-candidat-login text-center">
           <h3 class="text-montserrat text-center">VOUS AVEZ UN PROJET DE CRÉATION D'ENTREPRISE ?</h3>
            <p class="lead text-center">Déposez votre profil et soyez visible auprès de plus de 3 000 franchiseurs.</p>
            <p class="lead text-center">
            La Candidathèque Française de la Franchise est la plus grande plateforme de dépôt de profils d'entrepreneurs et l'outil de sourcing et de recrutement le plus utilisé par les recruteurs, franchiseurs et professionnels de la franchise. 
            La Candidathèque Française de la Franchise vous permet de trouver en un clic votre futur franchiseur. Pour cela, il vous suffit de déposer un dossier de candidature, de sélectionner les secteurs d'activités qui vous intéressent, ainsi que la région ou la zone géographique dans laquelle vous souhaitez vous installer. Les enseignes intéressées par votre profil prendront contact avec vous.
            </p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 card my-5 p-5">
            <div class="panel panel-default">
                <div class="panel-heading text-center ">
                    <h2 class="text-montserrat">CONNEXION</h2>
                    <p class="lead">Mon compte Candidat</p>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('candidatheque/candidat/login') }}">
                        {{ csrf_field() }}
                        <div class="md-form form-group mt-5 {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" name="email" value="{{old('email')}} "  class="form-control" id="email" placeholder="E-Mail Address">
                            <label for="email">E-Mail Address</label>
                             @if ($errors->has('email'))
                                <span class="help-block error">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="md-form form-group mt-5 {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
                            <label for="password">Mot de passe</label>
                             @if ($errors->has('password'))
                                <span class="help-block error">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                                <div class="checkbox">
                                    <label class="lead remember" >
                                        <input type="checkbox" name="remember"> Se souvenir de moi
                                    </label>
                                </div>
                        </div>

                        <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">
                                    Se connecter
                                </button>
                                <div>
                                    <a class="btn btn-link p-0" href="{{ url('/candidat/password/reset') }}">
                                        Mot de passe oublié ?
                                    </a>
                                </div>
                        </div>
                        <div class="form-group text-center link-inscription">
                                <p class="lead p-0 m-0">Vous n'avez pas encore de compte ?</p>
                                <a href="{{ url('/candidatheque/candidat/inscription') }}" class="btn btn-link m-0 p-0 ">Inscription</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
