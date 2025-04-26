<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Turma extends Model
{
    protected $fillable = [
        'turma',
        'serie',
        'qtd_alunos',
        'escola_id',
    ];

    public function escola(): BelongsTo
    {
        return $this->belongsTo(Escola::class);
    }
}
