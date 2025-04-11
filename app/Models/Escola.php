<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User;

class Escola extends User
{
    protected $table = 'escolas';
    protected $guard = 'escola';
    protected $fillable = [
        'name',
        'email',
        'password',
        'admin_id'
    ];
    public function administracao(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }
    public function diretor(): HasOne
    {
        return $this->hasOne(Diretor::class);
    }
}
