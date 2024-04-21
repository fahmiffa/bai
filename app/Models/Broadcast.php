<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patrner;

class Broadcast extends Model
{
    use HasFactory;

    public function mou()
    {
        return $this->hasMany(Mou::class, 'mitra','mitra');
    }

    public function jobs()
    {
        return $this->belongsTo(Job::class, 'job','id');
    }

    public function mitras()
    {
        return $this->belongsTo(Patrner::class, 'mitra','user');
    }

    public function gettojobAttribute()
    {                
        if($this->mitra == 0)
        {
            return 'PADANG BAI';
        }
        else
        {
            return Patrner::where('id',$this->mitra)->pluck('name');
        } 
    }
}
