@extends('layout.app')
 
@section('style')
    <link rel="stylesheet" href= "{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/owl.carousel.min.css') }}">
    <style>
    #accordion a{
       color: #428cf6 !important;
    }
    #accordion .titre{
        color: #428cf6 !important;
    }
    .titreTypeHuit{
        font-size: 22px;
        color: #428cf6 !important;
    }
    .titreTypeNeuf{
        font-size: 16px;
        color: #428cf6 !important;
    }
    </style>
@endsection
@section('content')

<div class="container">
        <h4 class="mt-5">
                PAR OÙ COMMENCER
        </h4>
        <hr>
        <p class="lead mt-2 h6 small-p">
                L’entrepreneuriat est un formidable voyage auquel il faut se préparer aux niveaux financier, matériel, physique et psychologique. Pour réussir et ouvrir une franchise, le créateur d’entreprise doit notamment posséder certaines aptitudes indispensables et prendre conscience des difficultés de son métier. La création d’une entreprise implique un changement radical dans l’existence, il faut savoir prendre des risques et changer de logique financière, ne serait-ce qu’en terme de revenus. C’est aussi accepter de nouvelles responsabilités et une certaine forme de solitude. Mais le dirigeant d’entreprise est en situation de contraintes choisies et non subies comme le salarié.
        </p>
        <p class="lead h6 small-p">
                Avec plus de 70 000 points de vente en France et 1900 réseaux, la franchise offre de nombreux avantages pour les créateurs d’entreprise : partage de savoir-faire, travailler avec des modèles déjà éprouvés et pouvoir bénéficier de la notoriété de grands groupes.
        </p>
        <p class="lead h6 small-p">
                Prêt à vous lancer dans l’aventure ? Découvrez nos rubriques conçues pour vous accompagner au lancement de votre projet, en vous apportant les informations dont vous pourrez avoir besoin :
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