<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    public $timestamps = false;

    protected $table = 'trajets';
    protected $primaryKey = 'id';
    protected $foreignKey = ['idVilleDpt', 'idVilleArr', 'idComp'];
    
    protected $fillable = ['idVilleDpt', 'idVilleArr', 'idComp', 'tarif'];
    
}
