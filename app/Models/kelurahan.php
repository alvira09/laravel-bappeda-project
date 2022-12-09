<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    use HasFactory;


    public function masyarakat()
    {
        return $this->belongsTo(masyarakat::class, 'kmasyarakat_id', 'id');
    }
}
