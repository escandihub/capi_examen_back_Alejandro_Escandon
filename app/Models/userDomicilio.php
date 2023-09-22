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
        $fecha = $this->fecha_nacimento;
        $dias = explode("-", $fecha, 3);
        $dias = mktime(0,0,0,$dias[1],$dias[0],$dias[2]);
        $edad = (int)((time()-$dias)/31556926 );
        return $edad;
    }

    public function getEdadUsuarioAttribute()
{
    return $this->edad;
}
}
