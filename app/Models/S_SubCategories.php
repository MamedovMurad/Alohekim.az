<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class S_SubCategories extends Model
{
    use SoftDeletes;

    function getCategory(){
        return $this->hasOne('App\Models\S_Categories','id','category_id');
    }
    
  
}
