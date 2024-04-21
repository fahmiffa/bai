<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patrner extends Model
{
    use HasFactory;

    public function head()
    {
        return $this->belongsTo(Head::class, 'user','mitra');        
    }

    public function siswa()
    {
        return $this->hasMany(Field::class, 'user','user');
    }
    
    public function mou()
    {
        return $this->hasMany(Mou::class, 'mitra','user');
    }
}
