<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeureDepart extends Model
{
    protected $timestamp = false;

    protected $table = 'heure_departs';
    protected $primaryKey = 'id';
    protected $foreignKey = 'idTrjt';

    protected $fillable = [
    	'idTrjt',
    	'heureDpt',
    	'heureEnreg',

    ];

}