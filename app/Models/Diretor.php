<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Diretor extends Model
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
