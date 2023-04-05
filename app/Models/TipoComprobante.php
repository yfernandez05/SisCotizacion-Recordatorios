<?php

namespace App\Models;

use App\Util\RuleManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoComprobante extends Model
{
    protected $table = 'tipocomprobantes';
    protected $primaryKey = 'codcomprobante';
    public $timestamps = false;


    protected $fillable = [
        'nombrecomprobante',
        'codigosunat',
        'serie',
        'correlativo',
        'agregarigv',
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
