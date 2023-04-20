<?php

namespace App\Models;

use App\Util\RuleManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servicio;
use App\Models\TipoServicio;
use App\Models\EstadoServicio;


class DetalleServicio extends Model
{
    protected $table = 'detalleservicios';
    protected $primaryKey = 'id';
    public $timestamps = false;


    protected $fillable = [
        'codservicio',
        'codtiposervicio',
        'codservicio',
        'tipoprecio',
        'refe_url_servicio',
        'frecuencia_recordatorio_fecha',
        'notadetalle',
        'cantidad',
        'precio',
        'descuento',
        'importe',
        'fecha_anticipado',
        'fecha_contratacion',
        'fecha_expiracion',
        'codestadoservicio',
        'estado',
    ];

    protected $hidden = [
        'userinsert', 
        'dateinsert', 
        'userupdate',
        'dateupdate',
    ];

    protected $dates = [
        'fecha_contratacion', 
        'fecha_anticipado', 
        'fecha_expiracion',
    ];

    protected $appends = [
        'isactive',
        'statename',
        'fechainicio',
        'fechaanticipo',
        'fechafin',
    ];

    public function getIsactiveAttribute(){
        return RuleManager::getIsActive($this->estado);
    }

    public function getStatenameAttribute(){
        return RuleManager::getStateName($this->estado);
    }

    public function getFechaInicioAttribute()
    {
        return optional($this->fecha_contratacion)->format('d-m-Y');
    }
    public function getFechaAnticipoAttribute()
    {
        return optional($this->fecha_anticipado)->format('d-m-Y');
    }
    public function getFechaFinAttribute()
    {
        return optional($this->fecha_expiracion)->format('d-m-Y');
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'codservicio','codservicio');
    }

    public function tiposervicio()
    {
        return $this->belongsTo(TipoServicio::class, 'codtiposervicio', 'codtiposervicio');
    }

    public function estadoservicio()
    {
        return $this->belongsTo(EstadoServicio::class, 'codestadoservicio', 'codestadoservicio');
    }
    
}
