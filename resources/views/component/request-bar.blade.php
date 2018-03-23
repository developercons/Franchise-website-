
@if(Session::has("franchiseList") && count(Session::get('franchiseList')) > 0)
    <div class="fc-request-wrapper">
    @else
    <div class="fc-request-wrapper hide">
@endif
    <div class="container">
        Vous avez <span class="fc-number-request">0</span> demande en attendant 
        <button type="button" class="btn btn-warning btn-request-show">Voir tous les demandes</button>
         <a href="{{route('demande')}}" type="button" class="btn btn-primary  btn-request-complet">
            compléter votre demande 
            <i class="icon ion-android-arrow-forward"></i>
        </a>
    </div>
    <div class="fc-request-list">
        <div class="fc-request-close">
            <i class="icon ion-ios-arrow-down"></i>
        </div>
        <ul class="list-group list-group-flush fc-list-group-request">
        </ul>
    </div>
</div>

