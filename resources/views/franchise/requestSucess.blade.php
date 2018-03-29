@extends('layout.app')
 
@section('style')
<link rel="stylesheet" href="{{asset('css/franchise.css')}} ">
<style>
    .ion-ios-checkmark-outline{
        color: #4886bd;
        font-size: 150px;
    }
</style>
@endsection

@section('content')
  <div class="container mt-5">
      <div class="p-5 card text-center">
            <i class="icon ion-ios-checkmark-outline mb-1"></i>
            <h3>Votre demande a été envoyé avec succés</h3>
            <p class="lead small mt-3">
                  Franchise France vous remercie et reste à votre disposition pour toute question
            </p>
      </div>
  </div>
@endsection