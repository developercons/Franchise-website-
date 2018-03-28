@extends('layout.app')
 
@section('style')
 <link rel="stylesheet" href= "{{ asset('css/select2.min.css') }}">
 <link rel="stylesheet" href="{{asset('css/franchise.css')}} ">
@endsection

@section('content')
    <div class="container">          
        <div class="fc-search-bar row">
                <div class="fc-name col-md-3">
                        @if(empty($searchName))
                            <input type="text" class="form-control fc-search-name " placeholder="Nom de franchise....">
                        @else
                            <input type="text" class="form-control fc-search-name " placeholder="Nom de franchise...." value="{{$searchName}}">
                        @endif
                        <span>OU</span>
                </div>
                <div class="col-md-3">
                    <select class="form-control fc-select-secteur">
                        <option value="" disabled selected>Choisir un secteur d'activité</option>
                        <option value="all_categories" >Tous les secteurs</option>
                        @foreach ($secteurs as $item)
                            <optgroup  label="{{$item->name}}">
                                @foreach($item->subcategory()->get() as $subcategory)
                                   @if(!empty($searchSecteur) && $searchSecteur == $subcategory->name)
                                      <option value="{{$subcategory->name}}" selected>{{$subcategory->name }}</option>
                                   @else
                                     <option value="{{$subcategory->name}}">{{$subcategory->name }}</option>
                                   @endif                       
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
                <div class="col-md-3">
                    <a class="btn btn-primary btn-search" href="#" role="button"> RECHERCHE</a>
                </div>
            </div>
            @if($franchies)
            <div class="fc-list-items mt-5">
                    <div class="row">
                        <h4 class="fc-items-count">{{$franchies->count()}} réseaux trouvés</h4>
                    </div>
                    @foreach ($franchies as $item)
                        <div class="row mt-3">
                            <div class="card w-100 p-4">
                                <div class="row">
                                    <div class="col-md-8">
                                        
                                        <div class="d-flex">
                                            <div class="fc-thumbnails">
                                                 <img src="{{Voyager::image($item->image)}}" class="img-fluid">
                                            </div>
                                            <div class="fc-item-info ml-4">
                                                    <h3 class="m-0">{{$item->name}} </h3>
                                                    <p class="lead small p-0 mb-2 color-primary">
                                                        {{$item->subcategory()->first()->name}}
                                                    </p>
                                                    <p class="lead">
                                                        {{$item->short_description}}
                                                    </p>
                                                    <p>
                                                        APPORT PERSONNEL {{$item->apport_personnel}} €
                                                    </p>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-md-4 fc-btns-item">
                                            <a href="{{ route('singleFranchise', [
                                                        'categorie'=> str_replace( ' ' , '-' , $item->subcategory()->first()->name) ,
                                                        'id'=> $item->id,
                                                        'name'=>  str_replace( ' ' , '-' ,$item->name)])
                                                    }}" 
                                              class="btn btn-primary">voir la fiche enseigne</a>
                                                <button type="button" class="btn btn-warning btn-add-request" 
                                                        data-id="{{$item->id}}"
                                                        data-name="{{$item->name}}" >
                                                    DEMANDER UNE DOCUMENTATION
                                                </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
            @else
             <div class="fc-not-found mt-5">
                 <h2 class="text-center">
                    Aucun résultat trouvé
                 </h2>
             </div>
            @endif
        </div>
@endsection

@section('script')
<script src="{{ asset('js/select2.min.js') }}"></script>
<script>
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
</script>
@endsection