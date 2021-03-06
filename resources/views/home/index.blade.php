@extends('layout.app')
 
@section('style')
    <link rel="stylesheet" href= "{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/vegas.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/home.css') }}">
@endsection
@section('content')

    <div id="fc-bg-video-wrapper" style="height:500px;background-image: url('{{Voyager::image(setting('layout.image'))}}')">
        <div  id="fc-bg-video" style="height:100%"></div>
    </div>
    <div class="fc-bg-wrapper">
        
          <!-- <div class="fc-background" style="background: url('{{ asset('img/bg.jpg') }}')"></div> -->
          <div class="fc-title">
              <h3>Franchise france </h3>
              <p>
                Franchise france est une ressource dédiée aux entreprises et aux opportunités de franchise à vendre.
              </p>
          </div>    
        <div class="fc-search-bar row justify-content-center">
                <div class="fc-name col-md-3">
                    <input type="text" class="form-control fc-search-name " placeholder="Nom de franchise....">
                    <span>OU</span>
                </div>
                <div class="col-md-3">
                    <select class="form-control fc-select-secteur">
                        <option value="" disabled selected>Choisir un secteur d'activité</option>
                        <option value="all_categories" >Tous les secteurs</option>
                        @foreach ($secteurs as $item)
                            <optgroup  label="{{$item->name}}">
                                @foreach($item->subcategory()->get() as $subcategory)
                                <option value="{{$subcategory->name}} ">{{$subcategory->name }}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <select class=" form-control fc-select-apport" > 
                            <option value="" disabled selected>Apport personnel</option>
                            <option value="5000">jusqu'a 5 000 €</option>
                            <option value="10000">jusqu'a 10 000 €</option>
                            <option value="20000">jusqu'a 20 000 €</option>
                            <option value="30000">jusqu'a 30 000 €</option>
                            <option value="50000">jusqu'a 50 000 €</option>
                            <option value="80000">jusqu'a 80 000 €</option>
                            <option value="100000">jusqu'a 100 000 €</option>
                            <option value="150000">jusqu'a 150 000 €</option>
                            <option value="200000">jusqu'a 200 000 €</option>
                            <option value="500000">jusqu'a 500 000 €</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-primary btn-search" href="#" role="button"> RECHERCHE</a>
                </div>
            </div>
            <div class="fc-bg-choose text-center container text-white">
                    <h5 class="mt-3">Vous êtes ?</h5>
                    <a href="{{url('candidatheque/candidat/login')}} " class="btn  waves-effect waves-light mt-0">Candidat </a>
                    <a href="{{url('candidatheque/franchiseur/login')}}" class="btn  waves-effect waves-light mt-0">Franchiseur </a>
            </div>
    </div>  
    <div class="fc-features">
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="text-center fc-section-title">NOS COUPS DE COEUR  </h2>
            </div>
            <div class="row">
                <div class="owl-carousel fc-features-carousel">
                    @foreach ($franchies as $franchie)
                        <div>
                            <a href="{{ route('singleFranchise', [
                                        'categorie'=> str_replace(' ' , '-' , $franchie->subcategory()->first()->name) ,
                                        'id'=> $franchie->id,
                                        'name'=>  str_replace( ' ' , '-' ,$franchie->name)])
                                    }}">
                                <div class="fc-apport text-center">Apport : {{$franchie->apport_personnel}} €</div>
                                <img src="{{Voyager::image($franchie->image)}} ">
                                <div class="fc-desc">{{$franchie->name}}</div>
                            </a>
                        </div>
                    @endforeach
               </div>
            </div>
            <div class="row justify-content-center">
                 <a  class="btn btn-primary" href="{{route('franchiseIndex')}}" role="button">
                    Découvrez tous nos franchise
                </a>
            </div>
        </div>
    </div>
    <div class="fc-secteur mt-4">
        <div class="container">
             <h3 class="text-center fc-section-title">TROUVEZ LA FRANCHISE ADAPTÉE À VOS EXIGENCES </h3>
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
    </div>

    <div class="fc-candidatheque-content mt-5">
        <div class="bg-candidatheque" style="background-image:url('{{asset('img/bg-candidat.jpg')}}')"></div>
        <div class="container p-5 text-white text-center my-5">
            <h1>REJOIGNEZ LA PLUS GRANDE CANDIDATHÈQUE DÉDIÉE À LA FRANCHISE</h1>
            <a href="{{route('candidatheque')}} " class="btn btn-warning mt-5">Rejoignez nous </a>
        </div>
    </div>
    <div class="fc-testmonials">
            <h3 class=" text-center fc-section-title">
            ACTUALITÉS DE NOS RÉSEAUX DE FRANCHISE

            </h3>
            <div id="tesmonialNav" class="w-100 text-right"></div>
            <div class="owl-carousel fc-tesmonial-carousel">
                @foreach($blogs as $blog)
                    <div class="card p-5 text-center">
                             <div class="blog-img" style="background-image : url({{Voyager::image($blog->image)}})"></div>
                            <h3 class="fc-ts-author">
                                    {{$blog->title}}
                            </h3>
                            <p class="lead">
                                    {{$blog->excerpt}}
                            </p>
                            <a href="{{url('blogs/'.$blog->slug)}}">Lire la suite</a>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                 <a class="btn btn-primary btn-search" href="{{url('blogs')}} " role="button">VOIR TOUS</a>
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
     
@endsection

@section('script')
    <script src="{{asset('js/vegas.min.js')}} "></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    
    <script>
       
       @php 
            $video1 = setting('layout.video1');
            $video2 = setting('layout.video2');
        @endphp
        
        $vid1_src = "{{asset('storage/'. json_decode($video1)[0]->download_link)}}";
        $vid2_src = "{{asset('storage/'. json_decode($video2)[0]->download_link)}}";
        $("#fc-bg-video").vegas({
                slides: [
                    { src: $vid1_src ,delay: 6500, video: [
                        "{{asset('video/coverateliergourmand22.mp4')}}"
                    ]},
                    { src:  $vid2_src ,delay: 6500, video: [
                        "{{asset('video/coverateliergourmand21.mp4')}}"
                    ]},
                ]
         });

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
            // $(".fc-blog-article").owlCarousel({
            //     margin:25,
            //     stagePadding:20,
            //     loop:true,
            //     nav: true,
            //     navText: ["<i class='icon ion-chevron-left'></i>","<i class='icon ion-chevron-right'></i>"],
            //     autoplay:true,
            //     autoplayTimeout:1000,
            //     autoplayHoverPause:true,
            //     navContainer: '#customNav',
            // });

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

            //Select
            $('.fc-select-secteur').select2({
                placeholder: "Choisir un secteur d'activité",
                allowClear: true
            }); 
            //Select
            $('.fc-select-apport').select2({
                placeholder: "Apport personnel",
                allowClear: true
            });

            //Search query
            $(".btn-search").click(function(){
                window.location.href = getSearchUrl();
            })

            function getSearchUrl(){
                $url = "{{route('franchiseIndex')}}";

                if($(".fc-select-secteur").val() && $(".fc-select-apport").val()) {
                    $secteur =  $(".fc-select-secteur").val().trim().split(" ").join('-');
                    $apport = $(".fc-select-apport").val();
                    $url = $url + "/recherche/secteur=" +$secteur + "/apport=" + $apport;
                    return $url;
                }

                if( $(".fc-search-name").val() ){
                    $url = $url + "/recherche/name=" + $(".fc-search-name").val();
                    return $url;
                }

                if($(".fc-select-secteur").val()){
                    $search =  $(".fc-select-secteur").val().trim().split(" ").join('-');
                    $url = $url + "/recherche/secteur=" +$search;
                }

                if($(".fc-select-apport").val()){
                    $url = $url + "/recherche/apport=" + $(".fc-select-apport").val();
                }
                
                return $url;
            }
        });
    </script>
@endsection