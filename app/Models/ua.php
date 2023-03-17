<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ua extends Model
{
    use HasFactory;
    protected $table = "unidad_administrativa";

    
    public function products(){
        return $this->hasMany(product::class, 'ua_id', 'id');
    }
}
