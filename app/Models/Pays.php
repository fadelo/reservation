<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    public $timestamps = false;

    protected $table = 'pays';
    protected $primaryKey = 'id';

    protected $fillable = ['name'];
}
