<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;


class CategoriaPublicacion extends Pivot
{ 
    protected $table = "categoria_publicacion";
    public $timestamps = false;
}
