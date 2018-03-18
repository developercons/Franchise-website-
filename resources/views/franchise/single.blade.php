@extends('layout.app')
 
@section('style')
 <link rel="stylesheet" href="{{asset('css/franchise.css')}} ">
@endsection

@section('content')
     <div class="fc-list mt-5">
         <div class="container">
            <div class="fc-item-list row">
                <div  class="item"><a href="/">Accueil</a></div>
                <div class="item"><a href="">{{$category->name}} </a></div>
                <div class="item"><a href="">{{$subcategory->name}}</a></div>
            </div>
         </div>
     </div>
     <div class="fc-detaill mt-5">
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                    <h2 class="fc-title">
                        {{$franchise->name}}
                    </h2>
                    <p class="lead">
                        {{$franchise->short_description}}
                    </p>
                 </div>
                 <div class="col-md-6 text-right">
                        <button type="button" class="btn btn-warning">DEMANDER UNE DOCUMENTATION</button>
                 </div>
             </div>
             <div class="row mt-4">
                 <div class="col-md-3">
                     <img src="{{Voyager::image($franchise->image)}}" class="mx-auto">
                 </div>
                 <div class="col-md-9">
                     <div class="row">
                         <div class="col-md-4">
                             <div class="d-flex align-items-center">
                                <i class="icon ion-social-euro"></i>                                
                                 <div class="fc-info">
                                     <p>APPORT PERSONNEL</p>
                                     <p class="fc-price">{{$franchise->apport_personnel}} €</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-4">
                            <div class="d-flex align-items-center">
                               <i class="icon ion-social-euro-outline"></i>                                
                                <div class="fc-info">
                                    <p>AIDE AU FINANCEMENT</p>
                                    <p class="fc-price fc-bool">
                                        @if($franchise->aide_financement == 0)
                                         NON
                                        @else
                                        OUI
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                               <i class="icon ion-ios-pulse-strong"></i>                                
                                <div class="fc-info">
                                    <p>INVESTISSEMENT GLOBAL</p>
                                    <p class="fc-price">{{$franchise->investissment_global}} €</p>
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="row">
                         <div class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <i class="icon ion-podium"></i>                                
                                    <div class="fc-info">
                                        <p>DROITS D’ENTRÉE</p>
                                        <p class="fc-price">{{$franchise->investissment_global}} €</p>
                                    </div>
                                </div>
                         </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <i class="icon ion-briefcase"></i>                                
                                    <div class="fc-info">
                                        <p>FORMATION</p>
                                        <p class="fc-price fc-bool">
                                                @if($franchise->formation == 0)
                                                NON
                                               @else
                                               OUI
                                               @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <i class="icon ion-arrow-graph-up-right"></i>                                
                                    <div class="fc-info">
                                        <p>CA RÉALISABLE APRÈS 2 ANS</p>
                                        <p class="fc-price">{{$franchise->last_realisation}} €</p>
                                    </div>
                                </div>
                            </div>
                         </div>
                        <div class="row fc-second-ref">
                            <div class="col-md-4">
                                <p>Redevance fonctionnement : <br><span class="fc-price"> {{$franchise->redevance_fonctionnement}}% du CA HT</span></p>
                            </div>
                            <div class="col-md-4">
                                <p>Surface moyenne:<br><span class="fc-price"> {{$franchise->surface}}  m²</span></p>
                            </div>
                            <div class="col-md-4">
                                <p>Type de contrat  : <br><span class="fc-price"> {{$franchise->type_contract}} </span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                 <p>Redevance publicitaire :<span class="fc-price"> {{$franchise->redevance_publicitaire}}   </span></p>
                            </div>
                            <div class="col-md-4">
                                <p>Royalties  : <span class="fc-price"> {{$franchise->royalties}}</span></p>
                            </div>
                        </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
@endsection