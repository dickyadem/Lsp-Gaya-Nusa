<?php

namespace App\Models\Skema;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElemenKompetensi extends Model
{
    use HasFactory;

    protected $table = 'elemen_kompetensis';

    protected $fillable = [
        'name',
        'unit_id',
    ];
}
