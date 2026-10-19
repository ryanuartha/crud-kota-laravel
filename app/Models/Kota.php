<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kota extends Model
{
    protected $table = 'kota';

    protected $fillable = [
        'id_propinsi',
        'nama_kota',
    ];

    public function getPropinsi(): BelongsTo
    {
        return $this->belongsTo(Propinsi::class, 'id_propinsi');
    }
}