<?php

namespace App\Models;

use App\Util\RuleManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Cliente;
use App\Models\EstadoServicio;
use App\Models\TipoComprobante;
use App\Models\DetalleServicio;

class Servicio extends Model
{
    protected $table = 'servicios';
    protected $primaryKey = 'codservicio';
    public $timestamps = false;

    protected $fillable = [
        'codcliente',
        'codempleado',
        'codcomprobante',
        'codestadoservicio',
        'url_documento',
        'serie',
        'numero',
        'fecha_servicio',
        'fecha_anticipadogeneral',
        'fecha_finsercanogeneral',
        'fecha_fingeneral',
        'total',
        'estado',
    ];

    protected $hidden = [
        'userinsert',
        'dateinsert',
        'userupdate',
        'dateupdate',
    ];
    protected $dates = [
        'fecha_servicio',
        'fecha_fingeneral',
        'fecha_anticipadogeneral',
        'fechaventa',
        'dateupdate',
    ];

    protected $appends = [        
        'isactive',
        'statename',
        'fecha',
        'fechafin',
        'fechaedit',
    ];

    public function getIsactiveAttribute(){
        return RuleManager::getIsActive($this->estado);
    }
    public function getStatenameAttribute(){
        return RuleManager::getStateName($this->estado);
    }

    public function getFechaAttribute()
    {
        return optional($this->fecha_servicio)->format('d-m-Y');
    }
    public function getFechaFinAttribute()
    {
        return optional($this->fecha_fingeneral)->format('d-m-Y');
    }

    public function getFechaeditAttribute()
    {
        return optional($this->dateupdate)->format('d-m-Y');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'codempleado', 'id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'codcliente', 'codcliente');
    }

    public function estadoservicio()
    {
        return $this->belongsTo(EstadoServicio::class, 'codestadoservicio', 'codestadoservicio');
    }

    public function tipocomprobante()
    {
        return $this->belongsTo(TipoComprobante::class, 'codcomprobante', 'codcomprobante');
    }

    public function serviciodetalles()
    {
        return $this->hasMany(DetalleServicio::class, 'codservicio', 'codservicio')
        ->with('tiposervicio','estadoservicio')
        ->where('estado', '=', RuleManager::ACTIVE_STATE);
    }
}
