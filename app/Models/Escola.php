<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
    public function secretaria(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
    public function diretor(): HasMany
    {
        return $this->hasMany(Diretor::class, 'escola_id');
    }
    public function professores(): HasMany
    {
        return $this->hasMany(Professor::class);
    }
}
