<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';

    public function categarymodels(){
            return $this->hasOne(categarymodels::class,'id','categary_id','name');
         } 
    
}
