<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formAspirasi extends Model
{
    use HasFactory;


    public function keluarahan()
    {
        return $this->hasMany(keluarahan::class, 'kelurahan_id', 'id');
    }
    
    public function opds()
    {
        return $this->hasMany(opds::class, 'opd_id', 'id');
    }

    public function user(){
        return $this->hasMany(User::class, 'user_id', 'id');
    }
}
