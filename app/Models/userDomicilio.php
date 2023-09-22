<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userDomicilio extends Model
{
    use HasFactory;

    
    protected $fillable = ['user_id','domicilio','numero_exterior','colonia', 'cp','ciudad','fecha_nacimento'];
    protected $appends = ['edad_usuario'];

    function edad() {
        return \Carbon\carbon::parse($this->attributes['fecha_nacimento'])->age;
    }

    public function getEdadUsuarioAttribute()
{
    return $this->edad();
}
}
