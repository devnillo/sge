<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User;

class Admin extends User
{
    protected $table = 'admins';
    protected $guard = 'admin';
    protected $fillable = [
        'name',
        'email',
        'password',
        'cidade',
        'cep',
        'uf',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function escolas(): HasMany
    {
        return $this->hasMany(Escola::class);
    }
}
