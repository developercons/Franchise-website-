
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
                @foreach ($secteurs as $item)
                     <optgroup  label="{{$item->name}}">
                         @foreach($item->subcategory()->get() as $subcategory)
                           <option value="{{$subcategory->name}} ">{{$subcategory->name }}</option>
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
                    <option value="8000">jusqu'a 80 000 €</option>
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