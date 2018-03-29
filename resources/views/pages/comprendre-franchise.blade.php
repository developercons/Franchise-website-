@extends('layout.app')
 
@section('style')
    <link rel="stylesheet" href= "{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/owl.carousel.min.css') }}">
    <style>
    #accordion a{
       color: #428cf6 !important;
    }
    #accordion .titre{
        color: #428cf6 !important;
    }
    .titreTypeHuit{
        font-size: 22px;
        color: #428cf6 !important;
    }
    .titreTypeNeuf{
        font-size: 16px;
        color: #428cf6 !important;
    }
    </style>
@endsection
@section('content')

<div class="container">
        <h4 class="mt-5">
            FRANCHISE : LES RÈGLES, LES LOIS, L'ESSENTIEL DE CE QU'IL FAUT SAVOIR SUR LA FRANCHISE
        </h4>
        <hr>
        <p class="lead mt-2 h6 small-p">
                La franchise est une méthode de collaboration entre une entreprise : le franchiseur, et une ou plusieurs entreprises, les franchisés. Afin de vous aider dans la compréhension de ce système commercial, Toute la franchise, le site expert de la franchise a dressé pour vous un ensemble de thèmes pour tout savoir sur la franchise.
        </p>
        <p class="lead h6 small-p">
             Vous voulez savoir comment choisir votre franchise ? Quels sont les avantages de la franchise ? Ou encore comment éviter les pièges en franchise ? Alors cliquez sur les titres ci-dessous pour accéder au contenu !
                Ces rubriques peuvent évoluer.
                Bonne navigation et lecture sur le site expert Franchise France.
        </p>
        <h4 class="mt-5 color-primary text-center">
                TOUT SAVOIR SUR LA FRANCHISE ET LES RÉSEAUX DE FRANCHISEURS
        </h4>
        <div id="accordion" class="mt-5">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Qu’est-ce qu’une franchise ? #1
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                            <p>
                                    La franchise est  une méthode de collaboration entre d’une part, une entreprise, le franchiseur, et d’autre part une ou plusieurs entreprises, les franchisés. Son objet est d’exploiter un concept de franchise mis au point par le franchiseur.

                            </p>
                           <p class="titre lead">
                                Le Concept de la franchise comprend trois éléments
                           </p>
                           <p class="titre lead ml-3">
                                Les Signes de Ralliement de la Clientèle en tant que franchisé
                           </p>
                            <ul>
                                <li> Le franchiseur garantit au franchisé la jouissance de signes de ralliement de la clientèle mis à sa disposition.                                    </li>
                                <li>Il doit notamment lui garantir la validité de ses droits sur la ou les marques, et/ou enseignes dont l’usage est conféré à quelque titre que ce soit, au franchisé.</li>
                                <li>Il doit notamment lui garantir la validité de ses droits sur la ou les marques, et/ou enseignes dont l’usage est conféré à quelque titre que ce soit, au franchisé.</li>
                                <li>Le franchiseur entretient et développe l’image de marque</li>
                                <li> Le franchiseur veille au respect par les franchisés des prescriptions d’utilisation de la marque ou enseigne et des autres signes de ralliement mis contractuellement à sa disposition.</li>
                                <li>A l’issue du contrat, le franchiseur s’assurera de la non utilisation des signes de ralliement de la clientèle par l’ancien franchisé. En cas d’exclusivité de l’utilisation de la marque sur un territoire donné, le franchiseur en précise les modalités : objet, portée.</li>
                            </ul>
                            
                           
                            
                            <p class="titre lead ml-3">
                                Le Savoir-Faire en franchise
                            </p>
                            <ul>
                                <li>Le franchiseur par une information et une formation adaptées le transmet au franchisé et en contrôle l’application et le respect.</li>
                                <li>Le franchiseur encourage la remontée d’informations provenant des franchisés afin d’améliorer le savoir-faire.</li>
                                <li>Dans la période précontractuelle, contractuelle et post-contractuelle, le franchiseur empêche toute utilisation et toute transmission du savoir-faire, en particulier à l’égard de réseaux concurrents, pouvant porter préjudice au réseau de franchise.</li>
                            </ul>
                            
                            <p class="titre lead ml-3">
                                    La Collection de Produits, Services et/ou Technologies par le franchiseur
                            </p>
                            
                            <ul>
                                <li>Le franchiseur met à la disposition du franchisé une gamme de produits, services et/ou technologies qu’il a conçus, mis au point, agréés ou acquis.</li>
                                <li>L’exclusivité réservée au franchisé, si elle existe, est clairement précisée en termes d’objet et de portée.</li>
                                <li>Le franchiseur s’assure par tout moyen que la collection de produits et/ou services offerts au consommateur est bien conforme à l’image de marque et ce au moyen d’une clause d’achats exclusifs pour les systèmes qui le justifieraient, en particulier lorsque les produits portent la marque du franchiseur.</li>
                            </ul>
                            <p class="titre lead ml-3">
                                    Les Quatre Acteurs de la Franchise
                            </p>
                            <p class="ml-3">
                                    Le Franchiseur est un Entrepreneur Indépendant, Personne Physique ou Morale titulaire des droits sur les signes de ralliement de la clientèle au nombre desquels se trouve nécessairement une enseigne et/ou marque protégée, les droits devant être d'une durée au moins égale à la durée du contrat offrant un ensemble de produits, services et/ou technologies, ayant mis au point et exploité avec succès un concept original dans une ou plusieurs unités pilotes.
                            </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Avantages pour la franchise #2
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                            <table
                            width=100% cellspacing=0 cellpadding=0 border=0>
                            <tr>
                               <td
                                  valign=top>
                                  <h1 class="titreTypeHuit titreMargeB">Quels sont les avantages de la franchise ?</h1>
                                  <div
                                     class="chapoVieFranArticle">La franchise est une méthode de collaboration entre une entreprise, aussi appelée franchiseur et une ou plusieurs entreprises, les franchisés. En France, la <a
                                     href="/">franchise</a> c’est près de 1 600  franchiseurs et plus de 62 000 franchisés. Et le nombre de réseaux et de personnes choisissant la franchise pour créer leur entreprise ne cesse de croître d’année en année. Quelles sont les raisons de ce succès ? Elles sont à chercher du côté des avantages de ce système commercial.</div>
                                  <h2 class="titreTypeNeuf">Les avantages de la franchise</h2>
                                  <div
                                     class="contenuTexteArticleVF">
                                     <p>Voyons en détails, quels sont les avantages de la franchise.</p>
                                     <ul>
                                        <li>Bien qu’il appartienne à un réseau de franchise, le franchisé est propriétaire de son entreprise, il est donc<strong> juridiquement indépendant</strong>.</li>
                                        <li>Choisir la franchise permet de s’affranchir de la création d’une entreprise ex nihilo. Le franchisé bénéficie de l’image de marque et de la réputation de l’enseigne par rapport au consommateur.</li>
                                        <li>Dans le même ordre d’idée, le franchisé bénéficie d’<strong>un système de gestion commerciale conçu et expérimenté par le franchiseur</strong>, d’où l’économie de temps liée à l’utilisation d’un savoir-faire existant et la réduction du risque financier.</li>
                                        <li>Le franchisé va également accéder à <strong>une maîtrise professionnelle supérieure à celle de l’homme de métier isolé</strong> gr&#226;ce à la formation, à l’assistance et aux conseils permanents, aux outils pédagogiques.</li>
                                        <li>Le franchisé bénéficie de l’<strong>avantage compétitif</strong> dû à la synergie économique du réseau d’une part et à la capacité d’innovation du franchiseur d’autre part.</li>
                                        <li>Le franchisé bénéficie d’<strong>une meilleure rentabilité des capitaux investis</strong> par rapport au commerçant isolé gr&#226;ce à l’optimisation des capitaux investis et aux économies d’échelle permises par la standardisation des opérations.</li>
                                     </ul>
                                     <p>La franchise est le système commercial le plus fiable. Mais pour ce faire, la franchise a certaine exigence.</p>
                                  </div>
                                  <h2 class="titreTypeNeuf">Les exigences de la franchise</h2>
                                  <div
                                     class="contenuTexteArticleVF">
                                     <p>Voilà à quoi devra se conformer le futur franchisé dès son arrivée dans un réseau de franchise :</p>
                                     <ul>
                                        <li>Le franchisé est tenu d’appliquer la stratégie commerciale du franchiseur.</li>
                                        <li>Le franchisé est tenu de respecter les normes du concept, les standards de qualité.</li>
                                        <li>Le franchisé est obligé de suivre l’évolution du concept et du savoir-faire.</li>
                                        <li>Le franchisé est souvent obligé de s’approvisionner auprès du franchiseur ou des fournisseurs référencés.</li>
                                        <li>
                                           Le franchisé est tenu de rétribuer le franchiseur pour ses apports, par exemple sous forme :
                                           <ul>
                                              <li>De redevances forfaitaires initiales ou &#171; droit d’entrée &#187;,</li>
                                              <li>
                                                 De royalties en contrepartie de :
                                                 <ul>
                                                    <li>la licence de marque,</li>
                                                    <li>L’assistance permanente,</li>
                                                    <li>La formation permanente,</li>
                                                    <li>La recherche et l’innovation.</li>
                                                 </ul>
                                              </li>
                                           </ul>
                                        </li>
                                     </ul>
                                     <p><em>Extrait provenant de la Fédération Française de la Franchise &#171;Toute la franchise 2004 &#187;</em></p>
                                  </div>
                                  <div
                                     class="clearBoth">&#160;</div>
                               </td>
                            </tr>
                         </table>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Les différents types de réseaux de franchise #3
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                            <table
                            width=100% cellspacing=0 cellpadding=0 border=0>
                            <tr>
                               <td
                                  valign=top>
                                  <h1 class="titreTypeHuit titreMargeB">Qu’est-ce qu’une franchise ?</h1>
                                  <h2 class="titreTypeNeuf">Franchise</h2>
                                  <div
                                     class="contenuTexteArticleVF">
                                     <p>C’est une forme de commerce organisé qui permet la vente de produits, de services et de technologie. Elle est basée sur la collaboration étroite et continue entre des entreprises juridiquement et financièrement distinctes et indépendantes : le Franchiseur et ses Franchisés.</p>
                                     <p>Par le contrat de Franchise, le Franchiseur, créateur du réseau, accorde à ses Franchisés le droit, et impose l’obligation, d’exploiter pendant une durée déterminée, une entreprise en conformité avec le concept qu’il a élaboré.</p>
                                  </div>
                                  <h2 class="titreTypeNeuf">Commission-affiliation</h2>
                                  <div
                                     class="contenuTexteArticleVF">
                                     <p>Le fournisseur est propriétaire de la marchandise et rémunère le distributeur en commissions sur le chiffre d’affaires généré.</p>
                                  </div>
                                  <h2 class="titreTypeNeuf">Concession, concessionnaire</h2>
                                  <div
                                     class="contenuTexteArticleVF">
                                     <p>Le propriétaire d’une marque autorise par contrat le concessionnaire à vendre les produits de sa marque.</p>
                                  </div>
                                  <h2 class="titreTypeNeuf">Coopérative</h2>
                                  <div
                                     class="contenuTexteArticleVF">
                                     <p>Elle se distingue fondamentalement de la Franchise par le fait que tous les membres du réseau sont des coopérateurs. Ils disposent chacun d’une voix selon le principe fondamental : un homme = une voix.</p>
                                     <p>Cependant, c’est sans doute là que réside la distinction. En effet, les coopératives utilisent de plus en plus les méthodes de développement, d’animation et de contrôles des Franchises ; ce qui conduit à reconnaître un pouvoir de décision de plus en plus important à la tête du réseau.</p>
                                  </div>
                               </td>
                            </tr>
                         </table>
                    </div>
                  </div>
                </div>
              </div>
</div>
@endsection






