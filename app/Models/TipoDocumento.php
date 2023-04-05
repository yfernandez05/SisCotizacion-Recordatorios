<?php

namespace App\Models;

use App\Util\RuleManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table = 'tipodocumento';
    protected $primaryKey = 'iddocumento';
    public $timestamps = false;


    protected $fillable = ['nombre','estado'];

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
