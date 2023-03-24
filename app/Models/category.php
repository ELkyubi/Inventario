<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = "categoria";

    protected $fillable = [
        'categoria_nombre',
        'categoria_descripcion',
    ];

    public function products(){
        return $this->hasMany(product::class, 'cat_id', 'id');
    }

}
