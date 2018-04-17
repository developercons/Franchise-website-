@component('mail::message')
# Nouveaux inscription candidat

<strong>Nom</strong> : {{$nom}} <br>
<strong>Prenom </strong> : {{$prenom}} <br>
<strong>Email </strong> : {{$email}} <br>



{{ config('app.name') }}
@endcomponent
