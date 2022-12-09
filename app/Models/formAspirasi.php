<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formAspirasi extends Model
{
    use HasFactory;


    public function dataAspirasi()
    {
        return $this->hasMany(dataAspirasi::class, 'aspirasi_id', 'id');
    }

}
