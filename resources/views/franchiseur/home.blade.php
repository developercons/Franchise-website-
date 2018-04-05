@extends('franchiseur.layout.app')

@section('style')
 <link rel="stylesheet" href="{{asset('/css/candidat.css')}} ">
 <style>
    .icon-dash{
        font-size: 70px;
        text-align: center;
        color: #454b50;
    }
    h4{
        text-transform:uppercase;
    }
 </style>
@endsection

@section('content')
@php
 $candidat = Auth::guard('franchiseur')->user();
@endphp
<div class="container-fluid my-5">
    <div class="row">
        <div class="fc-title">
                <i class="icon ion-drag mr-1"></i>
                Tableau de bord 
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card p-4 py-5">
                <h4 class="text-center">Ajouter votre franchise</h4>
                 <i class="icon-dash icon ion-ios-plus-outline"></i>
                <a href="{{route('addFranchisePage')}} " class="btn btn-warning mt-3 w-50 mx-auto">Ajouter votre franchise</a>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-4 py-5">
                <h4 class="text-center">Voir les listes des candidats</h4>
                <i class="icon-dash icon ion-ios-people-outline"></i>
                <a href="{{url('candidatheque/franchiseur/candidats')}} " class="btn btn-warning mt-3 w-50 mx-auto">Voir les liste des candidats</a>
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
        @if (Session::has('status'))
            $(".fc-success-dialog").slideDown();
            setTimeout(function(){ $(".fc-success-dialog").slideUp(); }, 3500);
        @endif

</script>
<script src="{{asset('js/candidat.js')}}"></script>
@endsection