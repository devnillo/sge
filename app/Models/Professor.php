<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professores';
    protected $fillable = ['name', 'email', 'password', 'address', 'number', 'escola_id'];
}
