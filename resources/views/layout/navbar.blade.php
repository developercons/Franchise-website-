<nav class="top-menu bg-secondary text-white">
        <div class="container">
                 <div class="fc-top d-flex ">
                     <div class="fc-nav-login">
                         <a href="{{url('candidatheque/candidat/login')}} ">Mon compte candidat</a>
                         <a href="{{url('candidatheque/franchiseur/login')}} ">Mon compte franchiseur</a>
                     </div>
                     <div class="fc-about ml-auto">
                         <a href="{{route('pageAll')}} ">Comprendre la franchise </a>
                         <a href="{{route('pageParOuCommencer')}} ">Par ou commencer ?</a>
                         <a href="{{route('pageChoisirFranchise')}}">Choisir une franchise</a>
                     </div>
                     <!-- <div class="btn-group fc-langue ml-2">
                            <button class="btn btn-outline waves-effect dropdown-toggle fc-nav-langue" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Français</button>          
                            <div class="dropdown-menu text-black fc-nav-langue-dropdown">
                                <a class="dropdown-item" href="#">Français</a>
                                <a class="dropdown-item" href="#">English</a>
                            </div>
                    </div> -->
                 </div>
        </div>
    </nav>
    <nav class="navbar fc-navbar navbar-expand-md navbar-dark  bg-secondary py-3">
        <div class="container">
            <a class="navbar-brand" href="/">
               <img src="{{voyager::image(setting('site.logo'))}}" width="200px" alt="">
            </a>
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">X</button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secteur d'activité</a>
                        <div class="dropdown-menu fc-nav-dropdown" >
                            <div class="d-flex fc-nav-secteurs">
                                @foreach ($secteurs as $secteur)
                                    <div class="col-md-6">
                                            <a class="dropdown-item" 
                                               href="{{route('franchiseCategory' , ["category" => str_replace( ' ' , '-' ,$secteur->name)])}}">
                                                {{$secteur->name}}
                                            </a>
                                    </div> 
                                @endforeach
                            </div>
                        </div>  
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Apport Personnel</a>
                        <div class="dropdown-menu" >
                                <a class="nav-link" href="{{route('searchApport' , ["apport" => 5000 ]) }}">jusqu'a 5 000 €</a>
                                <a class="nav-link" href="{{route('searchApport' , ["apport" => 10000 ]) }}">jusqu'a 10 000 €</a>
                                <a class="nav-link" href="{{route('searchApport' , ["apport" => 20000 ]) }}">jusqu'a 20 000 €</a>
                                <a class="nav-link" href="{{route('searchApport' , ["apport" => 30000 ]) }}">jusqu'a 30 000 €</a>
                                <a class="nav-link" href="{{route('searchApport' , ["apport" => 50000 ]) }}">jusqu'a 50 000 €</a>
                                <a class="nav-link" href="{{route('searchApport' , ["apport" => 80000 ]) }}">jusqu'a 80 000 €</a>
                                <a class="nav-link" href="{{route('searchApport' , ["apport" => 100000 ]) }}">jusqu'a 100 000 €</a>
                                <a class="nav-link" href="{{route('searchApport' , ["apport" => 150000 ]) }}">jusqu'a 150 000 €</a>
                                <a class="nav-link" href="{{route('searchApport' , ["apport" => 200000 ]) }}">jusqu'a 200 000 €</a>
                                <a class="nav-link" href="{{route('searchApport' , ["apport" => 500000 ]) }}">jusqu'a 500 000 €</a>
                        </div>
                        </li>
                     <li class="nav-item">
                      <a class="nav-link" href="{{route('candidatheque')}}">Candidathéque</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="#">Contactez nous</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>