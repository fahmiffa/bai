<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToJob extends Model
{
    use HasFactory;

    public function jobs()
    {
        return $this->hasOne(Job::class, 'id','job');
    }

    public function mitras()
    {
        return $this->hasOne(Patrner::class, 'user','mitra');
    }

    public function users()
    {
        return $this->hasOne(User::class, 'id','mitra');
    }

    public function mou()
    {
        return $this->hasMany(Mou::class, 'mitra','mitra');
    }
}
