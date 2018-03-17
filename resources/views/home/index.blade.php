@extends('layout.app')
 
@section('style')
    <link rel="stylesheet" href= "{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/home.css') }}">
@endsection
@section('content')
    @include('layout.navbar')
    <div class="fc-bg-wrapper">
          <div class="fc-background" style="background: url('{{ asset('img/bg.jpg') }}')"></div>
          <div class="fc-title">
              <h3>Franchise france </h3>
              <p>
                Franchise france est une ressource dédiée aux entreprises et aux opportunités de franchise à vendre.
              </p>
          </div>
          <div class="fc-search-bar row">
              <div class="fc-name col-md-3">
                    <input type="text" class="form-control " placeholder="Nom de franchise....">
                    <span>OU</span>
              </div>
              <div class="col-md-3">
                <select class="form-control fc-select-secteur">
                    <option>dsqs</option>
                    <option>xcxc</option>
                    <option>Choisir un secteur d'activité</option>
                    <option>dsqs</option>
                    <option>xcxc</option>
                    <option>Choisir un secteur d'activité</option>
                    <option>dsqs</option>
                    <option>xcxc</option>
                    
                </select>
             </div>
             <div class="col-md-3">
                <select class="form-control fc-select-secteur">
                    <option>Choisir un secteur d'activité</option>
                    <option>dsqs</option>
                    <option>xcxc</option>
                </select>
            </div>
            <div class="col-md-3">
                <a class="btn btn-primary btn-search" href="#" role="button"> RECHERCHE</a>
            </div>
          </div>
    </div>  
    <div class="fc-features">
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="text-center fc-section-title">NOS COUPS DE COEUR  </h2>
            </div>
            <div class="row">
                <div class="owl-carousel fc-features-carousel">
                    <div>
                        <div class="fc-apport text-center">Apport : 10 000$</div>
                        <img src="{{asset('img/11452.jpg')}} ">
                        <div class="fc-desc">Eat Salade</div>
                    </div>
                     <div>
                        <div class="fc-apport text-center">Apport : 10 000$</div>
                        <img src="{{asset('img/11452.jpg')}} ">
                        <div class="fc-desc">Eat Salade</div>
                    </div>
                    <div>
                        <div class="fc-apport text-center">Apport : 10 000$</div>
                        <img src="{{asset('img/11452.jpg')}} ">
                        <div class="fc-desc">Eat Salade</div>
                    </div>
                    <div>
                        <div class="fc-apport text-center">Apport : 10 000$</div>
                        <img src="{{asset('img/11452.jpg')}} ">
                        <div class="fc-desc">Eat Salade</div>
                    </div>
                    <div>
                        <div class="fc-apport text-center">Apport : 10 000$</div>
                        <img src="{{asset('img/11452.jpg')}} ">
                        <div class="fc-desc">Eat Salade</div>
                    </div>
                    <div>
                        <div class="fc-apport text-center">Apport : 10 000$</div>
                        <img src="{{asset('img/11452.jpg')}} ">
                        <div class="fc-desc">Eat Salade</div>
                    </div>
               </div>
            </div>
            <div class="row justify-content-center">
                <a  class="btn btn-primary" href="#" role="button">
                    Découvrez tous nos franchise
                </a>
            </div>
        </div>
    </div>
    <div class="fc-secteur mt-4">
        <div class="container">
             <h3 class="text-center fc-section-title">TROUVEZ LA FRANCHISE ADAPTÉE À VOS EXIGENCES </h3>
             <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="card p-4 text-center">
                            <img src="{{asset('img/secteur/salad.png')}}" class="mx-auto">
                            <p class="fc-name mt-2">Franchise alimentaires</p>
                            <a href="" class="btn btn-outline-primary waves-effect">Découvrir</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4 text-center">
                            <img src="{{asset('img/secteur/dashboard.png')}}" class="mx-auto">
                            <p class="fc-name mt-2">Franchises Auto-Moto-Bateau </p>
                            <a href="" class="btn btn-outline-primary waves-effect">Découvrir</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4 text-center">
                            <img src="{{asset('img/secteur/skyline.png')}}" class="mx-auto">
                            <p class="fc-name mt-2">Franchises de Bâtiment</p>
                            <a href="" class="btn btn-outline-primary waves-effect">Découvrir</a>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="card p-4 text-center">
                            <img src="{{asset('img/secteur/house.png')}}" class="mx-auto">
                            <p class="fc-name mt-2">Franchises de l'Habitat</p>
                            <a href="" class="btn btn-outline-primary waves-effect">Découvrir</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4 text-center">
                            <img src="{{asset('img/secteur/store.png')}}" class="mx-auto">
                            <p class="fc-name mt-2">Franchises de Magasin </p>
                            <a href="" class="btn btn-outline-primary waves-effect">Découvrir</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4 text-center">
                            <img src="{{asset('img/secteur/armchair.png')}}" class="mx-auto">
                            <p class="fc-name mt-2">Franchises Décoration-meuble</p>
                            <a href="" class="btn btn-outline-primary waves-effect">Découvrir</a>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="card p-4 text-center">
                            <img src="{{asset('img/secteur/tree.png')}}" class="mx-auto">
                            <p class="fc-name mt-2">Franchises Ecologie-Environnement</p>
                            <a href="" class="btn btn-outline-primary waves-effect">Découvrir</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4 text-center">
                            <img src="{{asset('img/secteur/key.png')}}" class="mx-auto">
                            <p class="fc-name mt-2">Franchises Immobilières </p>
                            <a href="" class="btn btn-outline-primary waves-effect">Découvrir</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4 text-center">
                            <img src="{{asset('img/secteur/food.png')}}" class="mx-auto">
                            <p class="fc-name mt-2">Franchises Restauration</p>
                            <a href="" class="btn btn-outline-primary waves-effect">Découvrir</a>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="card p-4 text-center">
                            <img src="{{asset('img/secteur/company.png')}}" class="mx-auto">
                            <p class="fc-name mt-2">Franchises Services entreprises</p>
                            <a href="" class="btn btn-outline-primary waves-effect">Découvrir</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4 text-center">
                            <img src="{{asset('img/secteur/science.png')}}" class="mx-auto">
                            <p class="fc-name mt-2">Franchises Technologie - Informatique </p>
                            <a href="" class="btn btn-outline-primary waves-effect">Découvrir</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4 text-center">
                            <img src="{{asset('img/secteur/handshake.png')}}" class="mx-auto">
                            <p class="fc-name mt-2">Franchises Services aux particuliers</p>
                            <a href="" class="btn btn-outline-primary waves-effect">Découvrir</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="fc-blog mt-5">
        <div class="container">
            <h3 class=" text-center fc-section-title">
                 ACTUALITÉS DE NOS RÉSEAUX DE FRANCHISE
            </h3>
            <div class="row mt-5">
                <div id="customNav" class="owl-nav"></div>
                <div class="owl-carousel fc-blog-article">
                     <div class="card p-3">
                         <div class="blog-date">
                             03-17-2018
                         </div>
                        <div class="blog-title mt-5 text-center">
                             AXEO SERVICES
                        </div>
                        <div class="bolg-body lead text-center mt-3">
                            Help Confort confirme sa présence au salon Franchise Expo Paris....
                        </div>
                        <div class="blog-more text-right mt-3">
                                <a href="">LIRE LA SUITE »</a>
                        </div>
                     </div>
                     <div class="card p-3">
                         <div class="blog-date">
                             03-17-2018
                         </div>
                        <div class="blog-title mt-5 text-center">
                             AXEO SERVICES
                        </div>
                        <div class="bolg-body lead text-center mt-3">
                            Help Confort confirme sa présence au salon Franchise Expo Paris....
                        </div>
                        <div class="blog-more text-right mt-3">
                                <a href="">LIRE LA SUITE »</a>
                        </div>
                     </div>
                     <div class="card p-3">
                         <div class="blog-date">
                             03-17-2018
                         </div>
                        <div class="blog-title mt-5 text-center">
                             AXEO SERVICES
                        </div>
                        <div class="bolg-body lead text-center mt-3">
                            Help Confort confirme sa présence au salon Franchise Expo Paris....
                        </div>
                        <div class="blog-more text-right mt-3">
                                <a href="">LIRE LA SUITE »</a>
                        </div>
                     </div>
                     <div class="card p-3">
                         <div class="blog-date">
                             03-17-2018
                         </div>
                        <div class="blog-title mt-5 text-center">
                             AXEO SERVICES
                        </div>
                        <div class="bolg-body lead text-center mt-3">
                            Help Confort confirme sa présence au salon Franchise Expo Paris....
                        </div>
                        <div class="blog-more text-right mt-3">
                                <a href="">LIRE LA SUITE »</a>
                        </div>
                     </div>
                     <div class="card p-3">
                         <div class="blog-date">
                             03-17-2018
                         </div>
                        <div class="blog-title mt-5 text-center">
                             AXEO SERVICES
                        </div>
                        <div class="bolg-body lead text-center mt-3">
                            Help Confort confirme sa présence au salon Franchise Expo Paris....
                        </div>
                        <div class="blog-more text-right mt-3">
                                <a href="">LIRE LA SUITE »</a>
                        </div>
                     </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="fc-newslettre mt-5 text-center text-white">
         <div class="container">
             <h2>RESTEZ ALERTÉ </h2>
             <h5>Recevez nos newsletters</h5>
             <div class="fc-newslettre-subscribe mt-4 row w-75 mx-auto justify-content-center">
                <div class="md-form formNewslettre w-75">
                    <input type="text" id="formNewslettre" class="form-control">
                    <label for="formNewslettre" >Entrez votre email adresse</label>
                </div>
                <button type="button" class="btn btn-primary btn-newslettre">s'inscrire   </button>
             </div>
         </div>
    </div>  
    <div class="fc-testmonials">
        <div class="container">
            <h3 class=" text-center fc-section-title">
                QUE PENSENT LES FRANCHISEURS DE FRANCHISE FRANCE ?

            </h3>
            <div id="tesmonialNav" class="w-100 text-right"></div>
            <div class="owl-carousel fc-tesmonial-carousel">
                <div class="card p-5 text-center">
                        <img src="{{asset('img/11452.jpg')}} ">
                        <h3 class="fc-ts-author">
                                Eric P.
                        </h3>
                        <p class="lead">
                            Franchise france, un site nettement approprié aux informations sur les réseaux. Idéal pour une visibilité probante dans le cadre du développement d'une franchise. 
                            A recommander sans hésitation.
                        </p>
                </div>
                <div class="card p-5 text-center">
                        <img src="{{asset('img/11452.jpg')}} ">
                        <h3 class="fc-ts-author">
                                Eric P.
                        </h3>
                        <p class="lead">
                            Franchise france, un site nettement approprié aux informations sur les réseaux. Idéal pour une visibilité probante dans le cadre du développement d'une franchise. 
                            A recommander sans hésitation.
                        </p>
                </div>
                <div class="card p-5 text-center">
                        <img src="{{asset('img/11452.jpg')}} ">
                        <h3 class="fc-ts-author">
                                Eric P.
                        </h3>
                        <p class="lead">
                            Franchise france, un site nettement approprié aux informations sur les réseaux. Idéal pour une visibilité probante dans le cadre du développement d'une franchise. 
                            A recommander sans hésitation.
                        </p>
                </div>
                <div class="card p-5 text-center">
                        <img src="{{asset('img/11452.jpg')}} ">
                        <h3 class="fc-ts-author">
                                Eric P.
                        </h3>
                        <p class="lead">
                            Franchise france, un site nettement approprié aux informations sur les réseaux. Idéal pour une visibilité probante dans le cadre du développement d'une franchise. 
                            A recommander sans hésitation.
                        </p>
                </div>
            </div>
        </div>
    </div>    
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                     <h4>A propos</h4>
                    <ul>
                        <li><a href="">Qui sommes-nous ?</a> </li>
                        <li><a href="">Mentions légales</a> </li>
                        <li><a href="">CGU</a> </li>
                        <li><a href="">Nous contacter</a> </li>

                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Franchise france</h4>
                    <ul>
                        <li><a href="">Liste de franchiseurs dans le service</a> </li>
                        <li><a href="">Liste de franchiseurs dans le commerce</a> </li>
                        <li><a href="">Liste de franchiseurs dans l'habitat</a> </li>
                        <li><a href="">Ouvrir une franchise</a> </li>

                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>SUIVEZ-NOUS</h4>
                    <div class="d-flex">
                        <i class="icon ion-social-facebook" ></i>
                        <i class="icon ion-social-twitter" ></i>
                        <i class="icon ion-social-googleplus" ></i>
                    </div>
                </div>
            </div>
            <div class="row ">
                <h6 class="text-center text-white w-100 mt-5">&copy FRANCHISE FRANCE 2018</h6>
            </div>
        </div>
    </footer>
@endsection

@section('script')
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
         $(document).ready(function() {
             //Select
            $('.fc-select-secteur').select2({
                placeholder: "Choisir un secteur d'activité",
            });

            //Carousel features
            $(".fc-features-carousel").owlCarousel({
                items:3,
                margin:25,
                stagePadding:20,
                autoWidth: true,
                loop:true,
                autoplay:true,
                autoplayTimeout:1000,
                autoplayHoverPause:true
            });

            //carousel blog
            $(".fc-blog-article").owlCarousel({
                margin:25,
                stagePadding:20,
                nav: true,
                navText: ["<i class='icon ion-chevron-left'></i>","<i class='icon ion-chevron-right'></i>"],
                autoplay:true,
                autoplayTimeout:1000,
                autoplayHoverPause:true,
                navContainer: '#customNav',
            });

            //carousel tesmonial
            $(".fc-tesmonial-carousel").owlCarousel({
                items:1,
                nav: true,
                autoplayTimeout:2000,
                autoplayHoverPause:true,
                navText: ["<i class='icon ion-chevron-left'></i>","<i class='icon ion-chevron-right'></i>"],
                navContainer: '#tesmonialNav',
                stagePadding:150,
                margin:20,
                startPosition:2,
                loop:true,
            })
        });
    </script>
@endsection