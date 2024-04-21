<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    public function head()
    {
        return $this->belongsTo(Head::class, 'id','field');        
    }

    public function bill()
    {
        return $this->hasOne(Bill::class, 'siswa','id');
    }

    public function inv()
    {
        return $this->belongsTo(Inv::class, 'id','siswa');
    }

    public function siswa()
    {
        return $this->hasOne(User::class, 'id','user');
    }
}
