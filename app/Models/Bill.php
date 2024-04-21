<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    public function heads()
    {
        return $this->belongsTo(Head::class, 'head','id');
    }

    public function invoices()
    {        
        return $this->hasOne(Invoice::class, 'bill','id');
    }

    public function peserta()
    {
        return $this->hasOne(Field::class, 'id','siswa');
    }

    public function lpk()
    {        
        return $this->hasOne(Patrner::class, 'user','mitra');
    }
}
