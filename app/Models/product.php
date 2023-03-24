<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = "product";

    protected $fillable = [
        'nombre',
        'stock',
        'unidades',
        'foto',
        'ua_id',
        'cat_id',
        'fech_ingr',
        'fech_egr',
        'observacion',
    ];

    public function category(){
        return $this->belongsTo(category::class,'cat_id','id');
    }

    public function ua(){
        return $this->belongsTo(ua::class, 'ua_id','id');
    }
   
}
