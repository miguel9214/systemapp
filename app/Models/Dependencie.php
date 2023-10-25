<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependencie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function computers(): HasMany
    {
        return $this->hasMany(Computer::class);
    }
}
