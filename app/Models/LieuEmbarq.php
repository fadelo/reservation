<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LieuEmbarq extends Model
{
    public $timestamps = false;

    protected $table = 'lieu_embarqs';
    protected $primariKey = 'id';
    protected $foreignKey = 'idTrjt';

    protected $fillable = [
    	'idTrjt',
    	'lieuEmbarq',
    ];
}
