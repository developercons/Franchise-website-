<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Franchise extends Model
{
    use Resizable;
    
    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory','subcategorie_id');
    }
}
