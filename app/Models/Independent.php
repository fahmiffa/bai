<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Independent extends Model
{
    use HasFactory;

    public function head()
    {
        return $this->belongsTo(Head::class, 'user','mandiri');        
    }

    public function siswa()
    {
        return $this->hasOne(User::class, 'id','user');
    }
}
