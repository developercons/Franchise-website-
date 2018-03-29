@component('mail::message')
# Introduction

Nouveaux demande pour les documentations des franchise suivant : 

@php
  $franchiseName = explode('-',$demande->franchiseName);
  $franchiseID = explode('-',$demande->franchiseID);
  $index =0;
@endphp


<div class="table">
        <table width="100%" class="center">
                <tr>
                    <th>
                        Nom franchise
                    </th>
                    <th>
                        Lien
                    </th>
                </tr>
                @foreach($franchiseName as $name)
                    <tr>
                        <td>
                            {{$name}} 
                        </td>
                        <td>
                            <a href="{{route('singleFranchise' , 
                                    [
                                    "id" => $franchiseID[$index++],
                                    "name" => $name,
                                    "categorie"=>"all"
                                    ])}} ">
                                Voir
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
</div>

# Demandeur information
<div class="table">
       
        <table width="100%">
                    <tr>
                        <td><strong>NOM</strong></td>
                        <td> {{$demande->nom}} </td>
                    </tr>
                    <tr>
                        <td><strong>Prenom</strong></td>
                        <td> {{$demande->prenom}} </td>
                    </tr>
                    <tr>
                        <td><strong>Code_postal</strong></td>
                        <td> {{$demande->postal}} </td>
                    </tr>
                    <tr>
                        <td><strong>Ville</strong></td>
                        <td> {{$demande->ville}} </td>
                    </tr>
                    <tr>
                        <td><strong>Téléphone</strong></td>
                        <td> {{$demande->telephone}} </td>
                    </tr>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td> {{$demande->email}} </td>
                    </tr>
                    <tr>
                        <td><strong>Secteur géographique souhaité</strong></td>
                        <td> {{$demande->secteur}} </td>
                    </tr>
                    <tr>
                        <td><strong>Apport personnel </strong></td>
                        <td> {{$demande->apport_select}} </td>
                    </tr>
                    <tr>
                        <td><strong>Avancées de votre projet </strong></td>
                        <td> {{$demande->avance_projet_select}} </td>
                    </tr>
                    <tr>
                        <td><strong>Parcours</strong></td>
                        <td> {{$demande->txt_parcours}} </td>
                    </tr>
            </table>
</div>
    


@endcomponent
