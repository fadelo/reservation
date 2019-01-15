<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    public $timestamps = false;

    protected $table = 'villes';
    protected $primarykey = 'id';
    protected $foreignkey = 'idPays';

    protected $fillable = [
    	'ville',
    	'idPays',
    ];
}
