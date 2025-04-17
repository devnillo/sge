<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User;

class Diretor extends User
{
    protected $table = 'diretores';
    protected $guard = 'diretor';
    protected $fillable = [
        'name',
        'email',
        'password',
        'cpf',
        'bithdate',
        'mae',
        'pai',
        'escola_id'
    ];
    public function escola(): BelongsTo
    {
        return $this->belongsTo(Escola::class);
    }
}
