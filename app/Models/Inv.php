<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inv extends Model
{
    use HasFactory;

    protected $table = 'inv';

    // public function head()
    // {
    //     return $this->belongsTo(Head::class, 'user','mitra');        
    // }

    public function field()
    {
        return $this->hasOne(Field::class, 'id','siswa');
    }
    
}
