<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends User
{
    protected $table = 'professores';
    protected $fillable = ['name', 'uuid', 'cpf','email', 'password', 'address', 'number', 'escola_id'];
}
