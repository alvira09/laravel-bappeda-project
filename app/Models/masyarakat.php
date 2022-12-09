<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masyarakat extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function kelurahan()
    {
        return $this->hasMany(kelurahan::class, 'masyarakat_id', 'id');
    }
}
