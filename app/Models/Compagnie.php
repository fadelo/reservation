<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compagnie extends Model
{
    public $timestamps = false;

    protected $table = 'compagnies';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    	'nom',
    	'description',
        'rccm',
        'ifu',
    	'telephone',
    	'adresse',
    	'email',
    	'wifi',
    	'climatisation',
    	'num_compte_bancaire',
    	'momo',
    	'flooz',
    	'validiterReserv',
    	'penaliter',
    	'durPostPenaliter',
    	'msgAverti',

    ] ;
    
}
