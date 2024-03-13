<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Escola extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'regiao',
        'bairro',
        'endereco',
        'telefone',
        'status',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'escola_id');
    }
    public function estagiarios(): HasMany
    {
        return $this->hasMany(Estagiario::class);
    }
}
