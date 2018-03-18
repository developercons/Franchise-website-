<nav class="top-menu bg-secondary text-white">
        <div class="container">
                 <div class="fc-top d-flex justify-content-end">
                     <div class="fc-about">
                         <a href="">Comprendre la marchendise</a>
                         <a href="">Par ou commencer ?</a>
                         <a href="">Choisir une franchise</a>
                     </div>
                     <div class="btn-group fc-langue ml-2">
                            <button class="btn btn-outline waves-effect dropdown-toggle fc-nav-langue" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Français</button>          
                            <div class="dropdown-menu text-black fc-nav-langue-dropdown">
                                <a class="dropdown-item" href="#">Français</a>
                                <a class="dropdown-item" href="#">English</a>
                            </div>
                    </div>
                 </div>
        </div>
    </nav>
    <nav class="navbar fc-navbar navbar-expand-md navbar-dark  bg-secondary py-3">
        <div class="container">
            <a class="navbar-brand" href="/">Franchise france</a>
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
                                            <a class="dropdown-item" href="#">{{$secteur->name}}</a>
                                    </div> 
                                @endforeach
                            </div>
                        </div>  
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Apport Personnel</a>
                        <div class="dropdown-menu" >
                                <a class="nav-link" href="#">Ville d'implantation</a>
                        </div>
                        </li>
                     <li class="nav-item">
                          <a class="nav-link" href="#">Ville d'implantation</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">Enseigne</a>
                    </li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thématique</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>