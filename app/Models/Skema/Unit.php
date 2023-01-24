<?php

namespace App\Models\Skema;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unit extends Model
{
    use HasFactory;

    protected $table = 'units';

    protected $fillable = [
        'kode',
        'nama',
    ];

    public function skemas(): BelongsToMany
    {
        return $this->belongsToMany(Skema::class);
    }

    public function elemenKompetensi(): HasMany
    {
        return $this->hasMany(ElemenKompetensi::class, 'elemen_kompetensis');
    }
}
