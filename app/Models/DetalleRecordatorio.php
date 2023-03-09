<?php

namespace App\Models;

use App\Util\RuleManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleRecordatorio extends Model
{
    protected $table = 'detallerecordatorios';
    protected $primaryKey = 'id';
    public $timestamps = false;


    protected $fillable = [
        'codrecordatorio',
        'posicion',
        'codservicio',
        'tipoprecio',
        'refe_url_servicio',
        'descripcion_servicio',
        'cantidad',
        'precio',
        'importe',
        'fecha_anticipado',
        'fecha_contratacion',
        'fecha_expiracion',
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
    ];

    public function getIsactiveAttribute(){
        return RuleManager::getIsActive($this->estado);
    }

    public function getStatenameAttribute(){
        return RuleManager::getStateName($this->estado);
    }
}
