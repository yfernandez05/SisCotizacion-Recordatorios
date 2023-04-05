<?php

namespace App\Models;

use App\Util\RuleManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoServicio extends Model
{
    protected $table = 'estadoservicio';
    protected $primaryKey = 'codestadoservicio';
    public $timestamps = false;


    protected $fillable = [
        'nombreestadoservicio',
        'descripcion',
        'backgroundColor',
        'textColor',
        'codtipoestadoservicio',
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

    public function tipoestadoservicio(){
        return $this->belongsTo(TipoEstadoServicio::class, 'codtipoestadoservicio', 'codtipoestadoservicio');
    }
}
