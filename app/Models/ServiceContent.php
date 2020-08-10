<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceContent extends Model
{
    use SoftDeletes;

    function getSub_Category(){
        return $this->hasOne('App\Models\S_SubCategories','id','subcategory_id');
    }

    
}
