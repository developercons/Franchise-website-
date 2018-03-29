@extends('layout.app')
 
@section('style')
    <link rel="stylesheet" href= "{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/owl.carousel.min.css') }}">

@endsection
@section('content')

<div class="container">
        <h4 class="mt-5">
                CHOISIR UNE FRANCHISE
        </h4>
        <hr>
        <p class="lead mt-2 h6 small-p">
                Vous souhaitez créer votre entreprise et vous savez que la franchise vous convient, mais maintenant il vous reste à déterminer comment choisir votre franchise. Derrière le terme générique « franchise » se cache différents types de contrats : licence de marque, concession, affiliation et franchise. Certaines franchises nécessitent un local, d’autres non. Votre projet concerne plusieurs pays, vers qui vous tourner ? Et surtout comment savoir si un réseau de franchise fonctionne bien ?
        </p>
        <p class="lead h6 small-p">
                Dans cette rubrique, nous avons regroupé les actualités autour de la franchise par secteur d’activité, pour vous donner accès aux informations qui concernent votre projet rapidement. Le retour terrain est très important dans l’appréciation d’une franchise, consultez les enquêtes réalisées par l’Indicateur de la Franchise pour découvrir une vue interne des franchises. Enfin, que vos ambitions vous poussent à l’international ou dans votre ville, découvrez les meilleures franchises du moment disponibles pour ouvrir une franchise en France.
        </p>
        <h4 class="mt-5 color-primary text-center">
                TROUVEZ LA FRANCHISE ADAPTÉE À VOS EXIGENCES
        </h4>
        <div class="row mt-3">
                @foreach ($secteurs as $secteur)
                  <div class="col-md-4">
                          <div class="card p-5 mt-4 text-center">
                              <img src="{{Voyager::image($secteur->image)}}" class="mx-auto">
                               <p class="fc-name mt-2">{{$secteur->name}}</p>
                              <a href="{{route('franchiseCategory' , ["category" => str_replace( ' ' , '-' ,$secteur->name)])}} " class="btn btn-outline-primary waves-effect">
                                  Découvrir
                              </a>
                          </div>
                      </div>
                @endforeach
        </div>
        

</div>
@endsection






