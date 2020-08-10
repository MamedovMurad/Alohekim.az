<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Picture extends Model
{
    use SoftDeletes;

    
    function getSub_Category(){
        return $this->hasOne('App\Models\P_SubCategory','id','subcategory_id');
    }
}
