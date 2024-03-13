<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Estagiario extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'cpf',
        'telefone',
        'bairro',
        'curso',
        'periodo',
        'inicio_contrato',
        'fim_contrato',
        'escola_id',
        'status',
    ];

    public function escola(): BelongsTo
    {
        return $this->belongsTo(Escola::class);
    }

    public function getFormatedCursoAttribute()
    {
        if ($this->attributes['curso'] === 1) {
            return 'Análise Desenvolvimento de Sistemas - Manhã';
        } elseif ($this->attributes['curso'] === 2) {
            return 'Técnico Informática - Manhã';
        } elseif ($this->attributes['curso'] === 3) {
            return 'Guarda Mirim - Manhã';
        } elseif ($this->attributes['curso'] === 4) {
            return 'Análise Desenvolvimento de Sistemas - Tarde';
        } elseif ($this->attributes['curso'] === 5) {
            return 'Técnico Informática - Tarde';
        } elseif ($this->attributes['curso'] === 6) {
            return 'Guarda Mirim - Tarde';
        } elseif ($this->attributes['curso'] === 7) {
            return 'Análise Desenvolvimento de Sistemas - Noite';
        } elseif ($this->attributes['curso'] === 8) {
            return 'Técnico Informática - Noite';
        } elseif ($this->attributes['curso'] === 9) {
            return 'Guarda Mirim - Noite';
        } else {
            return null;
        }
    }
    public function getFormatedCursoCurtoAttribute()
    {
        if ($this->attributes['curso'] === 1) {
            return 'ADS - Manhã';
        } elseif ($this->attributes['curso'] === 2) {
            return 'TEC - Manhã';
        } elseif ($this->attributes['curso'] === 3) {
            return 'MIR - Manhã';
        } elseif ($this->attributes['curso'] === 4) {
            return 'ADS - Tarde';
        } elseif ($this->attributes['curso'] === 5) {
            return 'TEC - Tarde';
        } elseif ($this->attributes['curso'] === 6) {
            return 'MIR - Tarde';
        } elseif ($this->attributes['curso'] === 7) {
            return 'ADS - Noite';
        } elseif ($this->attributes['curso'] === 8) {
            return 'TEC - Noite';
        } elseif ($this->attributes['curso'] === 9) {
            return 'MIR - Noite';
        } else {
            return null;
        }
    }

    public function getFormatedStatusAttribute()
    {
        if ($this->attributes['status'] === 1) {
            return 'Ativo';
        } elseif ($this->attributes['status'] === 2) {
            return 'Inativo';
        } else {
            return null;
        }
    }

    public function getFormatedPeriodoAttribute()
    {
        if ($this->attributes['periodo'] === 1) {
            return 'Manhã - 7h às 12h';
        } elseif ($this->attributes['periodo'] === 2) {
            return 'Manhã - 7h às 13h';
        } elseif ($this->attributes['periodo'] === 3) {
            return 'Tarde - 12h às 18h';
        } elseif ($this->attributes['periodo'] === 4) {
            return 'Tarde - 13h às 18h';
        } elseif ($this->attributes['periodo'] === 5) {
            return 'Noite - 15h às 21h';
        } else {
            return null;
        }
    }

    protected function casts(): array
    {
        return [
            'curso' => 'integer',
            'periodo' => 'integer',
            'status' => 'integer',
        ];
    }
}
