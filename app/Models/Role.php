<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamp = false;

    protected $table = 'roles';
    protected $primaryKey = 'id';

    protected $fillable = ['role'];
}
