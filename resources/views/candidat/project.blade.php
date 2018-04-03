@extends('candidatheque.layout.app')

@section('style')
 <link rel="stylesheet" href="{{asset('/css/candidat.css')}} ">
 
@endsection

@section('content')
@php
 $candidat = Auth::guard('candidat')->user();
@endphp
      
       <div class="container mb-5">
           <div class="text-center mt-5">
                <h3 class="color-primary text-center ">COMPLÉTER VOTRE PROFIL</h3>
                <h5 class="mt-5">Augmentez vos chances d'être contacté</h5>
                <p class="mt-4 lead small">
                Démarquez-vous pour être repéré par les recruteurs. Les franchiseurs sont attentifs à la qualité de votre profil et de votre projet de création : soyez clairs, motivez voytre projet et renseignez bien tous les champs demandés.
                </p>
           </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-blue">
                        <div>
                                <h5 class="text-center">
                                Votre projet
                                </h5>
                                <div class="card-body">
                                    <div id="circle">
                                            <strong class="value"></strong>
                                    </div>
                                </div>
                            </div>
                    </div> 
                </div> 
                <div class="col-md-8 card  p-5">
                    <div class="panel panel-default">
                        <div class="panel-heading ">
                            <h4 class="text-montserrat">Votre projet</h4>
                        </div>
                        
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('candidatProjectPage')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="form-group mt-2">
                                        <label class="m-0">CV *</label>
                                        <div class="form-control-file">
                                                <div class="custom-file">
                                                    <input id="logo" name="cv" type="file" class="custom-file-input">
                                                    <label for="logo" class="custom-file-label">Choose file...</label>
                                                </div>
                                        </div>
                                        @if ($errors->has('cv'))
                                            <span class="help-block error">
                                                <strong>{{ $errors->first('cv') }}</strong>
                                            </span>
                                        @endif
                                        <p class="lead small">
                                        Format autorisé : Word / PDF, poids maxi. 5Mo
                                        </p>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label class="m-0">Lettre de motivation *</label>
                                        <div class="form-control-file">
                                                <div class="custom-file">
                                                    <input id="logo" name="lettre" type="file" class="custom-file-input">
                                                    <label for="logo" class="custom-file-label">Choose file...</label>
                                                </div>
                                        </div>
                                        @if ($errors->has('lettre'))
                                            <span class="help-block error">
                                                <strong>{{ $errors->first('lettre') }}</strong>
                                            </span>
                                        @endif
                                        <p class="lead small">
                                        Format autorisé : Word / PDF, poids maxi. 5Mo
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label for="text_project">Votre parcours, votre projet</label>
                                        <textarea class="form-control rounded-0" name="text_project" id="text_project" rows="10">{{$candidat->projet}}</textarea>
                                    </div>
                                                                            
                                <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary">
                                            ENREGISTRER
                                        </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
       </div>



        <div class="loading">
            <svg width="200px"  height="200px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-rolling" style="background: none;"><circle cx="50" cy="50" fill="none" ng-attr-stroke="}" ng-attr-stroke-width="}" ng-attr-r="}}" ng-attr-stroke-dasharray="ray}}" stroke="#5995cb" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(66 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg>
            <p>chargement en cours...</p>
        </div>
        
        <div class="fc-success-dialog">
            <p>
                votre modification a été enregistrée
            </p>
        </div>
        <div class="fc-error-dialog">
            <p>
                un erreur est survenue
            </p>
        </div>
        <!-- Laoding Modal  -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
                                        
@endsection

@section('script')
<script src="{{asset('js/progressbar.js')}}"></script>
<script>
        $('#circle').circleProgress({
          value: 0.75,
          size: 200,
          fill: {
            gradient: ["#C9D6FF", "#C9D6FF"]
          }
        }).on('circle-animation-progress', function(event, progress, stepValue) {
        $(this).children('.value').text((stepValue * 100).toFixed(0) + '%   ');
        });
        var $modifyCandidatURL= "{{route('modifyCandidat')}}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.custom-file-input').on('change', function() { 
              let fileName = $(this).val().split('\\').pop(); 
              $(this).next('.custom-file-label').addClass("selected").html(fileName); 
        });
        
        @if (Session::has('status'))
            $(".fc-success-dialog").slideDown();
            setTimeout(function(){ $(".fc-success-dialog").slideUp(); }, 3500);
        @endif

</script>
<script src="{{asset('js/candidat.js')}}"></script>
@endsection