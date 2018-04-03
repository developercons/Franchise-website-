@extends('franchiseur.layout.app')

@section('style')
 <link rel="stylesheet" href="{{asset('/css/candidat.css')}} ">
<style>
    .bg-candidat{
        border-radius:100%;
        height:50px;
        width:50px;
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
    }
</style>
@endsection

@section('content')
@php
 $franchiseur = Auth::guard('franchiseur')->user();
@endphp
   <div class="container">
                <div class="card my-5">
                <table class="table">
                    <!--Table head-->
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Disponibilité</th>
                            <th>Status</th>
                            <th>Apport personnel</th>
                            <th></th>
                        </tr>
                    </thead>
                    <!--Table head-->

                    <!--Table body-->
                    <tbody>
                         @foreach($candidats as $candidat)
                            <tr>
                                <td> 
                                    <div class="bg-candidat" style="background-image:url({{url('storage/'.$candidat->image)}})">

                                    </div>
                                </td>
                                <td>{{$candidat->nom}} </td>
                                <td>{{$candidat->prenom}} </td>
                                <td>{{$candidat->disponibilite}} </td>
                                <td>{{$candidat->status}} </td>
                                <td>{{$candidat->apport_personnel}} €  </td>
                                <td>
                                    <a href="{{route('singleCandidatPage',['id' => $candidat->id])}} " class="btn btn-primary">Voir</a>
                                </td>
                            </tr>
                         @endforeach
                    </tbody>
                    <!--Table body-->

                </table>
                </div>
   </div>
                                        
@endsection

@section('script')
<script>
      

</script>
<script src="{{asset('js/candidat.js')}}"></script>
@endsection