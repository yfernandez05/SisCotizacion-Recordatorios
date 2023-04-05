<?php

namespace App\Models;

use App\Util\RuleManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TipoDocumento;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'codcliente';
    public $timestamps = false;


    protected $fillable = [
        'nombrecliente',
        'appaternocl',
        'apmaternocl',
        'codtipodoc',
        'coducmento',
        'pais',
        'direccion',
        'telefono',
        'email',
        'estado',
    ];

    protected $hidden = [
        'userinsert', 
        'dateinsert', 
        'userupdate', 
        'dateupdate',
    ];

    protected $appends = [
        'isactive',
        'statename',
        'nombrecompleto',
    ];

    public function getIsactiveAttribute(){
        return RuleManager::getIsActive($this->estado);
    }

    public function getStatenameAttribute(){
        return RuleManager::getStateName($this->estado);
    }

    public function getNombrecompletoAttribute()
    {
        $nombreCompleto = $this->nombrecliente;

        if($this->appaternocl != null)
            $nombreCompleto = $nombreCompleto.' '.$this->appaternocl;

        if($this->apmaternocl != null)
            $nombreCompleto = $nombreCompleto.' '.$this->apmaternocl;


        return $nombreCompleto;
    }

    //si no hay valor mostramos espacio no NULL
    public function getAppaternoclAttribute($value)
    {

        return $value !== null ? $value : '';
    }

    public function getApmaternoclAttribute($value)
    {

        return $value !== null ? $value : '';
    }

    public function tipodocumento(){
        return $this->belongsTo(TipoDocumento::class, 'codtipodoc', 'iddocumento')
        ->withDefault([
            'nombre' => 'No especificado'
        ]);
    }
}
