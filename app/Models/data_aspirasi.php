<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_aspirasi extends Model
{
    use HasFactory;
 

    public function formAspirasi()
    {
        return $this->belongsTo(formAspirasi::class, 'aspirasi_id', 'id');
    }
}
