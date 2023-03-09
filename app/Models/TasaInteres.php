<?php

namespace App\Models;

use App\Util\RuleManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TasaInteres extends Model
{
    protected $table = 'tasainteres';
    protected $primaryKey = 'codtasainteres';
    public $timestamps = false;


    protected $fillable = ['nombre', 'descripcion'];

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
