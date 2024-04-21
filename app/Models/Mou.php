<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mou extends Model
{
    use HasFactory;

    public function mitras()
    {
        return $this->hasOne(Patrner::class, 'user','mitra');
    }

    public function agen()
    {
        return $this->hasOne(Agency::class, 'id','agency');
    }
}
