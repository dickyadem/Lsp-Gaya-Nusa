<?php

namespace App\Models\Skema;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skema extends Model
{
    use HasFactory;

    protected $table = 'skemas';

    protected $fillable = [
        'kode',
        'image',
        'nama',
        'slug',
        'dokumen',
        'skkni',
    ];

    public function units(): BelongsToMany
    {
        return $this->belongsToMany(Unit::class, 'skema_unit');
    }
}
