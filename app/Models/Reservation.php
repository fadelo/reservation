<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $timestamp = false;

    protected $table = 'reservations';
    protected $primaryKey = 'id';
    protected $foreignKey = ['idTrjt', 'idHeureDpt', 'idLieuEmbarq', 'idUser'];

    protected $fillable = [
    	'numero',
    	'dateReserv',
    	'dateDpt',
    	'nomReserv',
    	'nbrPlace',
    	'payer',
    	'idTrjt', 
    	'idHeureDpt', 
    	'idLieuEmbarq', 
    	'idUser',
    ];
}
