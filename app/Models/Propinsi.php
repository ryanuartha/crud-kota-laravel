<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Propinsi extends Model
{
    protected $table = 'propinsi';

    protected $fillable = [
        'nama_propinsi',
    ];

    public function kota(): HasMany
    {
        return $this->hasMany(Kota::class, 'id_propinsi');
    }
}