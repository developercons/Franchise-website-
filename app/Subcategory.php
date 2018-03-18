<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category','categorie_id');
    }

    public function franchise()
    {
        return $this->hasMany('App\Franchise','subcategorie_id');
    }
}
